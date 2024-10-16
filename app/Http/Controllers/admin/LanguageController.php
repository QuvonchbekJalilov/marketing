<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLangaugeRequest;
use App\Http\Requests\AdminRequest;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function filter(Request $request){
        $search = $request->input('search');
        $languageLength = $request->input('language_length');

        $query = Language::orderBy('id', 'DESC');

        if ($search) {
            $query->where(function($q) use ($search){
                $q->where('name_uz', "LIKE", "%$search%")
                    ->orWhere('name_ru', "LIKE", "%$search%")
                    ->orWhere('name_en', "LIKE", "%$search%")
                    ->orWhere('code', "LIKE", "%$search%");
            });
        }
        $languages = $query->paginate($languageLength);

        return view('admin.languages.partials.langauge_list', compact('languages'))->render();
    }
    public function index()
    {
        $languages = Language::paginate(10);
        return view('admin.languages.index', compact('languages'));
    }

 
    public function create()
    {
        return view('admin.languages.create');
    }


    public function store(AdminLangaugeRequest $request)
    {

        $validated = $request->validated();

        Language::create($validated);

        return redirect()->route('languages.index')->with('success', 'Language created successfully.');
    }


    public function show($id)
    {
        $language = Language::findOrFail($id);
        return view('admin.languages.show', compact('language'));
    }


    public function edit($id)
    {
        $language = Language::findOrFail($id);
        return view('admin.languages.edit', compact('language'));
    }


    public function update(AdminLangaugeRequest $request, $id)
    {
        $language = Language::findOrFail($id);


        $language->update($request->all());

        return redirect()->route('languages.index')->with('success', 'Language updated successfully.');
    }

 
    public function destroy($id)
    {
        $language = Language::findOrFail($id);
        $language->delete();

        return redirect()->route('languages.index')->with('success', 'Language deleted successfully.');
    }
}
