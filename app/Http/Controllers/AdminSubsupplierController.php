<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminSubsupplier;


class AdminSubsupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subsuppliers = AdminSubsupplier::orderBy('id','DESC')->paginate(10);
        return view("admin/store/subsupplier/subsupplier/index")->with(compact('subsuppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.store.subsupplier.subsupplier.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'spname' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'cname' => 'required',

        ]);
        AdminSubsupplier::create([
            'spname' => request()->get('spname'),
            'contact' => request()->get('contact'),
            'email' => request()->get('email'),
            'address' => request()->get('address'),
            'cname' => request()->get('cname'),
        ]);
        return redirect()->to(route('adminsubsupplier.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subsupplier = AdminSubsupplier::find($id);
        return view('admin.store.subsupplier.subsupplier.edit')->with(compact('subsupplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'spname' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'cname' => 'required',

        ]);
        $subsupplier = AdminSubsupplier::find($id);
        $subsupplier->update([
            'spname' => request()->get('spname'),
            'contact' => request()->get('contact'),
            'email' => request()->get('email'),
            'address' => request()->get('address'),
            'cname' => request()->get('cname'),
        ]);
        return redirect()->to(route('adminsubsupplier.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subsupplier = AdminSubsupplier::find($id);
        $subsupplier->delete();
        return redirect()->to(route('adminsubsupplier.index'));
    }
}
