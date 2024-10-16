<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminCategoryRequest;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function filter(Request $request)
    {
        $search = $request->input('search');
        $categoryLength = $request->input('category_length');

        $query = ServiceCategory::orderBy('id', 'DESC');

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('name_uz', "LIKE", "%$search%")
                  ->orWhere('name_ru', "LIKE", "%$search%")
                  ->orWhere('name_en', "LIKE", "%$search%");
            });
        }

        $categories = $query->paginate($categoryLength);

        return view('admin.categories.partials.category_list', compact('categories'))->render();
    }

    public function index()
    {
        $categories = ServiceCategory::paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(AdminCategoryRequest $request)
    {
        $validated = $request->validated();

        ServiceCategory::create($validated);

        return redirect()->route('categories.index')->with('success', 'Service Category created successfully.');
    }

    public function show($id)
    {
        $category = ServiceCategory::findOrFail($id);
        return view('admin.categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = ServiceCategory::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(AdminCategoryRequest $request, $id)
    {
        $category = ServiceCategory::findOrFail($id);

        $category->update($request->all());

        return redirect()->route('categories.index')->with('success', 'Service Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = ServiceCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Service Category deleted successfully.');
    }
}
