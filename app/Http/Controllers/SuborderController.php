<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubOrder;
use App\Models\Subsupplier;


class SuborderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=Suborder::orderBy('id','DESC')->paginate(10);
        return view("store.subsupplier.order_received.index")->with(compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders = Subsupplier::get();
        return view("store.subsupplier.order_received.add")->with(compact('orders'));

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
        Suborder::create([
        's_no'=>request()->get('s_no'),
         'po_no'=> request()->get('po_no'),
         'date' =>request()->get('date'),
         'd_c'=>request()->get('d_c'),
         'dscp' =>request()->get('dscp'),
         'qty_in' =>request()->get('qty_in'),
         'supplier'=>request()->get('spname')
        ]);

        return redirect()->to('/store/subsupplierrr/order');
        
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
        $order = Suborder::find($id);
        $orders = Subsupplier::get();
        return view("store.subsupplier.order_received.edit")->with(compact('order', 'orders'));
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
        $order=Suborder::find($id);
        $order->update([
            's_no'=>request()->get('s_no'),
            'po_no'=> request()->get('po_no'),
            'date' =>request()->get('date'),
            'd_c'=>request()->get('d_c'),
            'dscp' =>request()->get('dscp'),
            'qty_in' =>request()->get('qty_in'),
            'spname'=>request()->get('spname'),
        ]);
        return redirect()->to(route('suborder.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Suborder::find($id);
        $order->delete();
        return redirect()->to(route('suborder.index'));
    }

    public function search (Request $request)
    {
        $searchQuery=$request->input('search');


        $records=Suborder::where(function($query) use ($searchQuery){
                $query->where('s_no','LIKE',"%{$searchQuery}%")
                ->orWhere('supplier','LIKE',"%{$searchQuery}%");
                })->paginate(8);


return view('store.subsupplier.order_received.view',compact('searchQuery','records'));
    }
}

