<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function filter(Request $request){
        $search = $request->input('search');
        $providerLength = $request->input('provider_length');

        $query = User::where('role_id', 2)->orderBy('id', 'DESC');

        if ($search) {
            $query->where(function($q) use ($search){
                $q->where('name', "LIKE", "%$search%")
                    ->orWhere('email', "LIKE", "%$search%");
                //   ->orWhere('phone_number', 'LIKE', '%$search%')
                //   ->orWhere('company_email', 'LIKE', "%$search%")
                //   ->orWhere('company_organization', 'LIKE', "%$search%")
                //   ->orWhereHas('service', function($q) use ($search){
                //         $q->where('name_uz', 'LIKE', '%$search%')
                //           ->orWhere('name_ru', 'LIKE', "%$search%")
                //           ->orWhere('name_en', "LIKE", "%$search%");
                //   })
                //   ->orWhereHas('status', function($q) use ($search){
                //         $q->where('name', "LIKE", "%$search%");
                //   });
            });
        }
        $providers = $query->paginate($providerLength);

        return view('admin.providers.partials.provider_list', compact('providers'))->render();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $providers = User::where('role_id', 2)->paginate(5);

        return view('admin.providers.index', compact('providers'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(string $id)
    {
        $provider = User::find($id);
        return view('admin.providers.show', compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $provider = User::findOrFail($id);
        $provider->delete();
    
        return redirect()->route('providers.index')->with('success', 'Provider deleted successfully');
    }
}
