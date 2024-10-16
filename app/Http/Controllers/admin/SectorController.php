<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminSectorRequest;
use App\Http\Requests\SectorRequest;
use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    public function filter(Request $request)
    {
        $search = $request->input('search');
        $sectorLength = $request->input('sector_length');

        $query = Sector::orderBy('id', 'DESC');

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('name_uz', "LIKE", "%$search%")
                  ->orWhere('name_ru', "LIKE", "%$search%")
                  ->orWhere('name_en', "LIKE", "%$search%");
            });
        }

        $sectors = $query->paginate($sectorLength);

        return view('admin.sectors.partials.sector_list', compact('sectors'))->render();
    }

    public function index()
    {
        $sectors = Sector::paginate(10);
        return view('admin.sectors.index', compact('sectors'));
    }

    public function create()
    {
        return view('admin.sectors.create');
    }

    public function store(SectorRequest $request)
    {
        $validated = $request->validated();

        Sector::create($validated);

        return redirect()->route('sectors.index')->with('success', 'Sector created successfully.');
    }

    public function show($id)
    {
        $sector = Sector::findOrFail($id);
        return view('admin.sectors.show', compact('sector'));
    }

    public function edit($id)
    {
        $sector = Sector::findOrFail($id);
        return view('admin.sectors.edit', compact('sector'));
    }

    public function update(SectorRequest $request, $id)
    {
        $sector = Sector::findOrFail($id);

        $sector->update($request->all());

        return redirect()->route('sectors.index')->with('success', 'Sector updated successfully.');
    }

    public function destroy($id)
    {
        $sector = Sector::findOrFail($id);
        $sector->delete();

        return redirect()->route('sectors.index')->with('success', 'Sector deleted successfully.');
    }
}
