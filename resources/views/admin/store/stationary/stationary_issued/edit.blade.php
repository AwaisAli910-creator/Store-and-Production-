@extends('admin.admin_dashboard')
@section('admin')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Stationary Issued</div>
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
                <form method="POST" action="{{  route('adminstationary.update', $stationary->id )}}">
                    @method('PUT')
                    @csrf
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Vertical Form</h5>
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="input1" class="form-label">S_no</label>
                                <input type="number" class="form-control" id="s_no" name="s_no" placeholder="S_no" value="{{$stationary->s_no}}">
                            </div>
                            <div class="mb-4">
                                <label for="name" class="form-label">Particular</label>
                                <select class=" form-select @error('particular') is-invalid @enderror"  name="particular" id="name">
                                        <option value="none">--Particular Name--</option>
                                 @foreach($particulars as $particular)
                                 <option value="{{ $particular->particular }}" {{old("particular",$stationary->particular) == $particular->particular ? "selected" : null}}> {{ $particular->particular }}</option>
                                 @endforeach
                                </select>
                                <span class="text-danger">{{$errors->first('particular')}}</span>
                              </div>
                            <div class="col-md-12">
                                <label for="input3" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="date" placeholder="Date" value="{{$stationary->date}}">
                            </div>
                            <div class="col-md-12">
                                <label for="input4" class="form-label">Stock</label>
                                <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock" value="{{$stationary->stock}}">
                            </div>
                            <div class="col-md-12">
                                <label for="input5" class="form-label">Total Issue</label>
                                <input type="text" class="form-control" id="total_issue" name="total_issue" placeholder="Total Issue" value="{{$stationary->total_issue}}">
                            </div>
                            <div class="col-md-12">
                                <label for="input6" class="form-label">Balance</label>
                                <input type="number" class="form-control" id="balance" name="balance" placeholder="Balance" value="{{$stationary->balance}}">
                            </div>

                            <div class="col-md-6">
                                <label for="input8" class="form-label">Issue Department</label>
                                <input type="text" class="form-control" id="issue_dpt" name="issue_dpt" placeholder="Issue Department" value="{{$stationary->issue_dpt}}">
                            </div>

                            <div class="col-md-2">
                                <label for="input10" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="qty" name="qty" placeholder="Quantity" value="{{$stationary->qty}}">
                            </div>

                            <div class="col-md-2">
                                <label for="input10" class="form-label">Fuel</label>
                                <input type="number" class="form-control" id="fuel" name="fuel" placeholder="Fuel" value="{{$stationary->fuel}}">
                            </div>

                            <div class="col-md-2">
                                <label for="input10" class="form-label">Packet</label>
                                <input type="number" class="form-control" id="packet" name="packet" placeholder="Packet" value="{{$stationary->packet}}">
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
