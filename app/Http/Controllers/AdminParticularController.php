<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminParticular;



class AdminParticularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $particulars = AdminParticular::orderBy('id','DESC')->paginate(10);
        return view("admin.store.stationary.particular.index")->with(compact('particulars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.store.stationary.particular.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'particular' => 'required',
            'stock' => 'required',
            'date' => 'required',

        ]);

        $prev_stock = AdminParticular::where('particular', $request->get('particular'))
        ->orderBy('created_at', 'desc')
        ->value('stock');

        $ttl_stock = $prev_stock + $request->get('stock');

        AdminParticular::create([
            'particular' => request()->get('particular'),
            'stock' =>$ttl_stock,
            'date' => request()->get('date'),
        ]);
        return redirect()->to(route('adminparticular.index'));
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
        $particular = AdminParticular::find($id);
        return view('admin.store/stationary/particular/edit')->with(compact('particular'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'particular' => 'required',
            'stock' => 'required',
            'date' => 'required',


        ]);
        $particular = AdminParticular::find($id);
        $particular->update([
            'particular' => request()->get('particular'),
            'stock' => request()->get('stock'),
            'date' => request()->get('date'),
        ]);
        return redirect()->to(route('adminparticular.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $particular = AdminParticular::find($id);
        $particular->delete();
        return redirect()->to(route('adminparticular.index'));
    }

    // search Records in adminParticular
    public function search(Request $request)
    {
        $date1 = $request->get('date1');
        $date2 = $request->get('date2');
        $particular = $request->get('particular');

        $records = AdminParticular::whereBetween('date', [$date1, $date2])->where('particular','LIKE', ["%$particular%"])->orderBy('id', 'desc')->get();

        return view('admin.store/stationary/particular/view',compact('records', 'date1', 'date2', 'particular'));
    }
}


