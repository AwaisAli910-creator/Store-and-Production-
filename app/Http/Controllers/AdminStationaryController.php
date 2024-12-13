<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AdminStationary;
use App\Models\AdminParticular;

class AdminStationaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stationaries = AdminStationary::orderBy('id','DESC')->paginate(10);
         return view("/admin/store/stationary/stationary_issued/index")->with(compact('stationaries'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $particulars = Adminparticular::select('particular')
        ->orderBy('created_at', 'desc')
        ->groupBy('particular')
        ->get();
       return view("/admin/store/stationary/stationary_issued/add")->with(compact('particulars'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate(request(), [
            's_no' => 'required',
            'particular' => 'required',
            'stock' => 'required',
            'total_issue' => 'required',
            'balance' => 'required',
            'issue_dpt' => 'required',
            'date' => 'required',
            'fuel' => 'required',
            'qty' => 'required',
            'packet' => 'required',

        ]);
        AdminStationary::create([
            's_no'=>request()->get('s_no'),
            'particular'=>request()->get('particular'),
            'stock'=>request()->get('stock'),
            'total_issue'=>request()->get('total_issue'),
            'balance'=>request()->get('balance'),
            'issue_dpt'=>request()->get('issue_dpt'),
            'date'=>request()->get('date'),
            'fuel'=>request()->get('fuel'),
            'qty'=>request()->get('qty'),
            'packet'=>request()->get('packet'),
        ]);
          return redirect()->to(route('adminstationary.index'));


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
        $particulars = Adminparticular::get();
        $stationary = AdminStationary::find($id);
       return view("/admin/store/stationary/stationary_issued/edit")->with(compact('stationary','particulars'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->validate(request(), [
            's_no' => 'required',
            'particular' => 'required',
            'stock' => 'required',
            'total_issue' => 'required',
            'balance' => 'required',
            'issue_dpt' => 'required',
            'date' => 'required',
            'fuel' => 'required',
            'qty' => 'required',
            'packet' => 'required',

        ]);
          $stationary = AdminStationary::find($id);
          $stationary->update([
            's_no'=>request()->get('s_no'),
            'particular'=>request()->get('particular'),
            'stock'=>request()->get('stock'),
            'total_issue'=>request()->get('total_issue'),
            'balance'=>request()->get('balance'),
            'issue_dpt'=>request()->get('issue_dpt'),
            'date'=>request()->get('date'),
            'fuel'=>request()->get('fuel'),
            'qty'=>request()->get('qty'),
            'packet'=>request()->get('packet'),
       ]);
       return redirect()->to(route('adminstationary.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stationary = AdminStationary::find($id);
        $stationary->delete();
        return redirect()->to(route('adminstationary.index'));
    }
}
