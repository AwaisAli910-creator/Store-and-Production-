@extends('admin.admin_dashboard')
@section('admin')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Stationary</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Stationary Issued</li>
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

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <div class="position-relative">
                        <input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                    </div>
                  <div class="ms-auto"><a href="{{route('adminstationary.create')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>New Stationary</a></div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>S.no</th>
                                <th>Particular</th>
                                <th>Date</th>
                                <th>Stock</th>
                                <th>Total Issue</th>
                                <th>Balance</th>
                                <th>Issue Department</th>
                                <th>Quantity</th>
                                <th>Fuel</th>
                                <th>Packet</th>

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stationaries as $stationary)
                            <tr>
                                <td>{{$stationary->s_no}}</td>
                                <td>{{$stationary->particular}}</td>
                                <td>{{$stationary->date}}</td>
                                <td>{{$stationary->stock}}</td>
                                <td>{{$stationary->total_issue}}</td>
                                <td>{{$stationary->balance}}</td>
                                <td>{{$stationary->issue_dpt}}</td>
                                <td>{{$stationary->qty}}</td>
                                <td>{{$stationary->fuel}}</td>
                                <td>{{$stationary->packet}}</td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{route('adminstationary.edit',$stationary->id)}}" class=""><i class='bx bxs-edit'></i></a>
                                        <form method="post" action="{{route('adminstationary.destroy',$stationary->id)}}">
                                            @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="ms-2" style="padding: 9px 10px;outline:none;border:none;border-radius:5px;">
                                        <i class='bx bxs-trash'></i>
                                    </button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
<!--end page wrapper -->
@endsection
