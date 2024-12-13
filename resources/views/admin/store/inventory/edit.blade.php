@extends('admin.admin_dashboard')
@section('admin')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">SubSupplier</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <form method="POST" action="{{  route('admininventory.update', $inventory->id )}}">
                    @method('PUT')
                    @csrf
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Vertical Form</h5>
                        <form class="row g-3">

                             <div class="col-md-6">
                                <label for="input1" class="form-label">S.no</label>
                                <input type="number" class="form-control" id="s_no" name="s_no" placeholder="S.no" value="{{$inventory->s_no}}">
                            </div>
                            <div class="col-md-6">
                                <label for="input2" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="date" placeholder="Date" value="{{$inventory->date}}">
                            </div>
                            <div class="col-md-12">
                                <label for="input3" class="form-label">Description</label>
                                <input type="text" class="form-control" id="dscp" name="dscp" placeholder="Description" value="{{$inventory->dscp}}">
                            </div>
                            <div class="col-md-12">
                                <label for="input4" class="form-label">Supplier Name</label>
                                <input type="text" class="form-control" id="supp_name" name="supp_name" placeholder="Supplier Name" value="{{$inventory->supp_name}}">
                            </div>
                            <div class="col-md-12">
                                <label for="input5" class="form-label">Department Name</label>
                                <input type="text" class="form-control" id="dpt_name" name="dpt_name" placeholder="Department Name" value="{{$inventory->dpt_name}}">
                            </div>
                            <div class="col-md-6">
                                <label for="input6" class="form-label">Quantity-in</label>
                                <input type="number" class="form-control" id="qty_in" name="qty_in" placeholder="Quantity-in" value="{{$inventory->qty_in}}">
                            </div>

                            <div class="col-md-6">
                                <label for="input8" class="form-label">Quantity-Out</label>
                                <input type="number" class="form-control" id="qty_in" name="qty_out" placeholder="Quantity-Out" value="{{$inventory->qty_out}}">
                            </div>

                            <div class="col-md-6">
                                <label for="input10" class="form-label">Balance</label>
                                <input type="number" class="form-control" id="balance" name="balance" placeholder="Balance" value="{{$inventory->balance}}">
                            </div>
                            <div class="col-md-6">
                                <label for="input10" class="form-label">D.C</label>
                                <input type="number" class="form-control" id="d_c" name="d_c" placeholder="D.C" value="{{$inventory->d_c}}">
                            </div>
                            <div class="col-md-6">
                                <label for="input10" class="form-label">Weight-in</label>
                                <input type="number" class="form-control" id="weight_in" name="weight_in" placeholder="Weight-in" value="{{$inventory->weight_in}}">
                            </div>
                            <div class="col-md-6">
                                <label for="input10" class="form-label">Packets-in</label>
                                <input type="number" class="form-control" id="packets_in" name="packets_in" placeholder="Packets-in" value="{{$inventory->packets_in}}">
                            </div>
                            {{-- <div class="col-md-6">
                                <label for="input10" class="form-label">Weight-Out</label>
                                <input type="number" class="form-control" id="weight_out" name="weight_out" placeholder="Weight-out" value="{{$inventory->weight_out}}">
                            </div> --}}
                            <div class="col-md-6">
                                <label for="input10" class="form-label">No Cartons</label>
                                <input type="number" class="form-control" id="no_cartons" name="no_cartons" placeholder="No Cartons" value="{{$inventory->no_cartons}}">
                            </div>


                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="input12">
                                    <label class="form-check-label" for="input12">Check me out</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                                </div>
                            </div>
                        </form>
                        </form>
                    </div>
                </div>
@endsection
