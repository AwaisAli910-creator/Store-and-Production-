<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminRawmaterial;


class AdminRawMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rawmaterials=AdminRawmaterial::orderBy('id','DESC')->paginate(10);
        return view("admin.store.rawmaterial.index")->with(compact('rawmaterials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.store.rawmaterial.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            's_no' => 'required',
            'date' => 'required|date',
            'dscp' => 'required',
            'd_c' => 'required',
            'qty_in' => 'required',
            'qty_out' => 'required',
            'blc' => 'required',

        ]);
        AdminRawmaterial::create([
        's_no'=>request()->get('s_no'),
        'dscp' =>request()->get('dscp'),
         'date' =>request()->get('date'),
         'd_c'=>request()->get('d_c'),
         'qty_in' =>request()->get('qty_in'),
         'qty_out' =>request()->get('qty_out'),
         'blc'=>request()->get('blc')
        ]);

        return redirect()->to(route('adminraw-material.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rawmaterial = AdminRawmaterial::find($id);
        return view("admin.store.rawmaterial.edit")->with(compact('rawmaterial'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            's_no' => 'required',
            'date' => 'required|date',
            'dscp' => 'required',
            'd_c' => 'required',
            'qty_in' => 'required',
            'qty_out' => 'required',
            'blc' => 'required',

        ]);
        $rawmaterial=AdminRawmaterial::find($id);
        $rawmaterial->update([
        's_no'=>request()->get('s_no'),
        'dscp' =>request()->get('dscp'),
        'date' =>request()->get('date'),
        'd_c'=>request()->get('d_c'),
        'qty_in' =>request()->get('qty_in'),
        'qty_out' =>request()->get('qty_out'),
        'blc'=>request()->get('blc')
        ]);
        return redirect()->to(route('adminraw-material.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rawmaterial = AdminRawmaterial::find($id);
        $rawmaterial->delete();
        return redirect()->to(route('adminraw-material.index'));
    }
}
