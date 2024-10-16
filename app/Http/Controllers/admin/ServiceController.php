<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminServiceRequest;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function filter(Request $request)
    {
        $search = $request->input('search');
        $categoryLength = $request->input('service_length');

        $query = ServiceSubCategory::orderBy('id', 'DESC');

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('name_uz', "LIKE", "%$search%")
                  ->orWhere('name_ru', "LIKE", "%$search%")
                  ->orWhere('name_en', "LIKE", "%$search%")
                  ->orWhereHas('category', function($q) use ($search) {
                        $q->where('name_uz', "LIKE", "%$search%")
                          ->orWhere('name_ru', "LIKE", "%$search%")
                          ->orWhere('name_en', "LIKE", "%$search%");
                  });
            });
        }

        $services = $query->paginate($categoryLength);

        return view('admin.services.partials.service_list', compact('services'))->render();
    }

    public function index()
    {
        $services = ServiceSubCategory::paginate(10);
        
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        $categories = ServiceCategory::all(); // Fetch categories for the dropdown
        return view('admin.services.create', compact('categories'));
    }

    public function store(AdminServiceRequest $request)
    {
        $validated = $request->validated();
        ServiceSubCategory::create($validated);

        return redirect()->route('services.index')->with('success', 'Service Sub-Category created successfully.');
    }

    public function show($id)
    {
        $service = ServiceSubCategory::findOrFail($id);
        return view('admin.services.show', compact('service'));
    }

    public function edit($id)
    {
        $service = ServiceSubCategory::findOrFail($id);
        $categories = ServiceCategory::all(); // Fetch categories for the dropdown
        return view('admin.services.edit', compact('service', 'categories'));
    }

    public function update(AdminServiceRequest $request, $id)
    {
        $service = ServiceSubCategory::findOrFail($id);
        $service->update($request->validated());

        return redirect()->route('services.index')->with('success', 'Service Sub-Category updated successfully.');
    }

    public function destroy($id)
    {
        $service = ServiceSubCategory::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service Sub-Category deleted successfully.');
    }
}
