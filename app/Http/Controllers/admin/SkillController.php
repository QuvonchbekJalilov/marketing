<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminSkillRequest;
use App\Http\Requests\SkillRequest; // Assuming you have a request validation class for Skill
use App\Models\Skill;
use App\Models\ServiceCategory;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\ServiceSubCategory;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Filter skills based on search criteria.
     */
    public function filter(Request $request)
    {
        $search = $request->input('search');
        $skillLength = $request->input('skill_length');

        $query = Skill::orderBy('id', 'DESC');

        if ($search) {
            $query->where('name', "LIKE", "%$search%");
        }

        $skills = $query->paginate($skillLength);

        return view('admin.skills.partials.skill_list', compact('skills'))->render();
    }

    /**
     * Display a listing of the skills.
     */
    public function index()
    {
        $skills = Skill::with('service')->paginate(10); // Load related service for each skill
        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new skill.
     */
    public function create()
    {
        $services = ServiceSubCategory::all(); // Fetch services to show in dropdown or selection list
        return view('admin.skills.create', compact('services'));
    }

    /**
     * Store a newly created skill in storage.
     */
    public function store(AdminSkillRequest $request)
    {
        $validated = $request->validated();

        Skill::create($validated);

        return redirect()->route('skills.index')->with('success', 'Skill created successfully.');
    }

    /**
     * Display the specified skill.
     */
    public function show($id)
    {
        $skill = Skill::with(['service', 'services', 'portfolios'])->findOrFail($id);
        return view('admin.skills.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified skill.
     */
    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        $services = ServiceSubCategory::all(); // Fetch services to show in the selection list
        return view('admin.skills.edit', compact('skill', 'services'));
    }

    /**
     * Update the specified skill in storage.
     */
    public function update(AdminSkillRequest $request, $id)
    {
        $skill = Skill::findOrFail($id);

        $skill->update($request->all());

        return redirect()->route('skills.index')->with('success', 'Skill updated successfully.');
    }

    /**
     * Remove the specified skill from storage.
     */
    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('skills.index')->with('success', 'Skill deleted successfully.');
    }
}
