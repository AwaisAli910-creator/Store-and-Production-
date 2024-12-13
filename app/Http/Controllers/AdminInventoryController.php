<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminInventory;

class AdminInventoryController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories=AdminInventory::orderBy('id','DESC')->paginate(10);
        return view("admin.store.inventory.index")->with(compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.store.inventory.add");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
           's_no'=> 'required',
           'date'=> 'required',
           'dscp'=> 'required',
           'supp_name'=> 'required',
            'dpt_name'=> 'required',
            'qty_in'=> 'required',
            'qty_out'=> 'required',
            'balance'=> 'required',
            'd_c'=> 'required',
            'weight_in'=> 'required',
           'packets_in'=> 'required',
            'no_cartons'=> 'required',

        ]);

        AdminInventory::create([
                's_no'=>request()->get('s_no'),
                'date' =>request()->get('date'),
                'dscp' =>request()->get('dscp'),
                'supp_name'=>request()->get('supp_name'),
                'dpt_name'=>request()->get('dpt_name'),
                'qty_in' =>request()->get('qty_in'),
                'qty_out'=>request()->get('qty_out'),
                'balance'=> request()->get('balance'),
                'd_c'=>request()->get('d_c'),
                'weight_in'=>request()->get('weight_in'),
                'packets_in'=>request()->get('packets_in'),
                'no_cartons'=>request()->get('no_cartons'),
         ]);
         return redirect()->to(route('admininventory.index'));

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
        $inventory=AdminInventory::find($id);
        return view("admin.store/inventory/edit")->with(compact('inventory'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->validate(request(), [
            's_no'=> 'required',
            'date'=> 'required',
            'dscp'=> 'required',
            'supp_name'=> 'required',
             'dpt_name'=> 'required',
             'qty_in'=> 'required',
             'qty_out'=> 'required',
             'balance'=> 'required',
             'd_c'=> 'required',
             'weight_in'=> 'required',
            'packets_in'=> 'required',
             'no_cartons'=> 'required',

         ]);

        $inventory=AdminInventory::find($id);
        $inventory->update([
            's_no'=>request()->get('s_no'),
                'date' =>request()->get('date'),
                'dscp' =>request()->get('dscp'),
                'supp_name'=>request()->get('supp_name'),
                'dpt_name'=>request()->get('dpt_name'),
                'qty_in' =>request()->get('qty_in'),
                'qty_out'=>request()->get('qty_out'),
                'balance'=> request()->get('balance'),
                'd_c'=>request()->get('d_c'),
                'weight_in'=>request()->get('weight_in'),
                'packets_in'=>request()->get('packets_in'),
                'no_cartons'=>request()->get('no_cartons'),

        ]);
        return redirect()->to(route('admininventory.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inventory = AdminInventory::find($id);
        $inventory->delete();
        return redirect()->to(route('admininventory.destroy'));
    }
}
