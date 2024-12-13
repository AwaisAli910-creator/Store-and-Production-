<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stationary;
use App\Models\Particular;
use App\Models\Department;

class StationaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stationaries = Stationary::orderBy('id','DESC')->paginate(10);
         return view("/store/stationary/stationary_issued/index")->with(compact('stationaries'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments=Department::all();
        $particulars = particular::select('particular')
        ->orderBy('created_at', 'desc')
        ->groupBy('particular')
        ->get();
       return view("/store/stationary/stationary_issued/add")->with(compact('particulars','departments'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate(request(), [
            's_no' => 'required',
            'particular' => 'required',
            'Department' => 'required|not_in:none',
            'date' => 'required',
            'qty' => 'required',

        ]);
        Stationary::create([
            's_no'=>request()->get('s_no'),
            'particular'=>request()->get('particular'),
            'date'=>request()->get('date'),
            // 'stock'=>request()->get('stock'),
            // 'total_issue'=>request()->get('total_issue'),
            // 'balance'=>request()->get('balance'),
            'issue_dpt'=>request()->get('Department'),
            // 'fuel'=>request()->get('fuel'),
            'qty'=>request()->get('qty'),
            // 'packet'=>request()->get('packet'),
        ]);
          return redirect()->to(route('stationary.index'));


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
        $particulars = particular::get();
        $stationary = Stationary::find($id);
       return view("/store/stationary/stationary_issued/edit")->with(compact('stationary','particulars'));

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
          $stationary = Stationary::find($id);
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
       return redirect()->to(route('stationary.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stationary = Stationary::find($id);
        $stationary->delete();
        return redirect()->to(route('stationary.index'));
    }

    public function search (Request $request)
    {
        $searchQuery=$request->input('search');


        $records=Stationary::where(function($query) use ($searchQuery){
                $query->where('s_no','LIKE',"%{$searchQuery}%")
                ->orWhere('s_no','LIKE',"%{$searchQuery}%");
                })->paginate(8);


return view('/store/stationary/stationary_issued.view',compact('searchQuery','records'));
    }
}

