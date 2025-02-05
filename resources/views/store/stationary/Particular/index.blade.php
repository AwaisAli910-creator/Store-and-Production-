@extends('store.store_dashboard')
@section('store')
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
                        <li class="breadcrumb-item active" aria-current="page">particular</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                   <div class="col-6">
                    <form method="get" action="{{route("particular.search")}}">
                        @csrf
                        <div class="d-lg-flex">

                    <div class="ms-3 col-lg-3">
                        <label class="form-label  ms-1" for="date2">Enter Ending Date  <span class="text-danger">*</span></label>
                        <input type="date" name="date2" class="form-control">

                    </div>
                    <div class="ms-3 col-lg-4">
                        <label class="form-label  ms-1" for="particular">Enter Particular Name  <span class="text-danger">*</span></label>
                        <input type="text" name="particular" class="form-control">

                    </div>
                    <div class=" ms-4 mt-4">
                        <button type="submit" class=" mt-2 btn btn-sm btn-success">Search</button>
                    </div>
                    <div class="ms-2 mt-4">
                        <a href="/admin/store/stationary/particular">
                        <button type="button" class=" mt-2 btn btn-sm btn-danger">Reset</button>
                       </a>
                    </div>
                </div>
                    </form>
                </div>
                <div class="ms-auto"><a href="{{route('particular.create')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Particular</a></div>
                @if (session('success'))
                <div>{{ session('success') }}</div>
                @endif
            </div>
            @if($particulars->count()>0)
            <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Particular</th>
                                <th>Date</th>
                                <th>Stock</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($particulars as $particular)
                            <tr>
                                <td>{{$particular->particular}}</td>
                                <td>{{$particular->date}}</td>
                                <td>{{$particular->stock}}</td>


                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{route('particular.edit',$particular->id)}}" class=""><i class='bx bxs-edit'></i></a>
                                        <form method="post" action="{{route('particular.destroy',$particular->id)}}">
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
                <div class="mt-5">
                    {!! $particulars->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        @else
            <div class="alert alert-danger">No record found</div>
            @endif
            </div>
        </div>


    </div>
</div>
<!--end page wrapper -->
@endsection
