<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminVendor;

class AdminVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = AdminVendor::orderBy('id','DESC')->paginate(10);
        return view("admin.store.vendor.index")->with(compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.store.vendor.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'address' => 'required',

        ]);
        AdminVendor::create([
            'name' => request()->get('name'),
            'contact' => request()->get('contact'),
            'email' => request()->get('email'),
            'address' => request()->get('address'),
        ]);
        return redirect()->to(route('adminvendor.index'));
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
        $vendor = AdminVendor::find($id);
        return view('admin/store/vendor/edit')->with(compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'address' => 'required',

        ]);
        $vendor = AdminVendor::find($id);
        $vendor->update([
            'name' => request()->get('name'),
            'contact' => request()->get('contact'),
            'email' => request()->get('email'),
            'address' => request()->get('address'),
        ]);
        return redirect()->to(route('adminvendor.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vendor = AdminVendor::find($id);
        $vendor->delete();
        return redirect()->to(route('adminvendor.index'));
    }
}
