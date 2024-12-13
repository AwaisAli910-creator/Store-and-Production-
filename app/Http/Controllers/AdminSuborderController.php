<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminSuborder;
use App\Models\AdminSubsupplier;


class AdminSuborderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=AdminSuborder::orderBy('id','DESC')->paginate(10);
        return view("admin.store.subsupplier.order_received.index")->with(compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders = AdminSubsupplier::get();
        return view("admin.store.subsupplier.order_received.add")->with(compact('orders'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            's_no' => 'required',
            'po_no' => 'required',
            'date' => 'required|date',
            'd_c' => 'required',
            'dscp' => 'required',
            'qty_in' => 'required',
            'spname' => 'required',

        ]);
        AdminSuborder::create([
        's_no'=>request()->get('s_no'),
         'po_no'=> request()->get('po_no'),
         'date' =>request()->get('date'),
         'd_c'=>request()->get('d_c'),
         'dscp' =>request()->get('dscp'),
         'qty_in' =>request()->get('qty_in'),
         'supplier'=>request()->get('spname')
        ]);

        return redirect()->to(route('adminsuborder.index'));
        // echo"Done";
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
        $order = AdminSuborder::find($id);
        $orders = AdminSubsupplier::get();
        return view("admin.store.subsupplier.order_received.edit")->with(compact('order', 'orders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->validate(request(), [
            's_no' => 'required',
            'po_no' => 'required',
            'date' => 'required|date',
            'd_c' => 'required',
            'dscp' => 'required',
            'qty_in' => 'required',
            'spname' => 'required',

        ]);
        $order=AdminSuborder::find($id);
        $order->update([
            's_no'=>request()->get('s_no'),
            'po_no'=> request()->get('po_no'),
            'date' =>request()->get('date'),
            'd_c'=>request()->get('d_c'),
            'dscp' =>request()->get('dscp'),
            'qty_in' =>request()->get('qty_in'),
            'spname'=>request()->get('spname'),
        ]);
        return redirect()->to(route('adminsuborder.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = AdminSuborder::find($id);
        $order->delete();
        return redirect()->to(route('adminsuborder.index'));
    }
}

