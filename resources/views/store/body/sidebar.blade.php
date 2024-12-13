<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Store</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">

                    <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><img src="{{ asset('/backend/assets/images/s1.ico') }}"  style="width:35px; margin:10px" alt="icon">
                        </div>
                        <div class="menu-title">Store</div>
                    </a>
                    <ul>
                        <li> <a href="{{route('store.dashboard')}}"><img src="{{ asset('/backend/assets/images/dash.ico') }}"  style="width:30px; margin:10px" alt="icon"></i>Dashboard</a>
                        </li>


                        <li> <a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/v1_1.ico') }}"  style="width:30px; margin:10px" alt="icon"></i>Raw Brand</a>
                            <ul>
                                <li> <a href="{{route('rawbrand.index')}}"><i class='bx bx-radio-circle'></i>Raw Brand </a>

                                <li> <a href="{{route('rawbrand.create')}}"><i class='bx bx-radio-circle'></i>Add Brand  </a>
                                </li>
                            </ul>
                        </li>

                        <li> <a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/raw.ico') }}"  style="width:30px; margin:10px" alt="icon"></i>Raw  Material Product</a>
                            <ul>
                                <li><a href="{{route('rawmaterialproduct.index')}}"><i class='bx bx-radio-circle'></i> Product </a></li>
                                <li><a href="{{route('rawmaterialproduct.create')}}"><i class='bx bx-radio-circle'></i>Add Product </a></li>
                            </ul>
                        </li>

                        <li> <a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/raw.ico') }}"  style="width:30px; margin:10px" alt="icon"></i>Raw Material Quantity</a>
                            <ul>
                                <li><a href="/store/rawbrandproduct"><i class='bx bx-radio-circle'></i>Raw Material </a></li>
                                <li><a href="{{route('rawbrandprod.create')}}"><i class='bx bx-radio-circle'></i>Add Raw Material </a></li>
                                <li><a href="{{ route('quantityout.show') }}"><i class='bx bx-radio-circle'></i>Quantity Out</a></li>

                            </ul>
                        </li>

                       <li> <a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/v1_1.ico') }}"  style="width:30px; margin:10px" alt="icon"></i>vendor</a>
                            <ul>
                                <li> <a href="{{route('vendor.index')}}"><i class='bx bx-radio-circle'></i>View vendor</a>
                                </li>
                                <li> <a href="{{route('vendor.create')}}"><i class='bx bx-radio-circle'></i>Add vendor</a>
                                </li>
                            </ul>
                        </li>

                        <li><a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/inventory.ico') }}"  style="width:30px; margin:10px" alt="icon"></i>Inventory</a>
                            <ul>
                                <li><a href="{{route('inventory.index')}}"><i class='bx bx-radio-circle'></i>View Inventory</a></li>
                                <li><a href="{{route('inventory.create')}}"><i class='bx bx-radio-circle'></i>Add Inventory</a></li>
                            </ul>
                        </li>

                        <li> <a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/p.ico') }}"  style="width:30px; margin:10px" alt="icon"></i>product</a>
                            <ul>
                                <li> <a href="{{route('storeproduct.index')}}"><i class='bx bx-radio-circle'></i>View product</a>
                                </li>
                                <li> <a href="{{route('storeproduct.create')}}"><i class='bx bx-radio-circle'></i>Add product</a>
                                </li>
                            </ul>
                        </li>
                        <li> <a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/sub.ico') }}"  style="width:30px; margin:10px" alt="icon"></i>Sub Supplier</a>
                        <ul>

                        <li><a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/ss.ico') }}"  style="width:25px; margin:10px" alt="icon">Subsupplier</a>
                            <ul>
                                <li><a href="{{route('subsupplier.index')}}"><i class='bx bx-radio-circle'></i>View Subsupplier</a></li>
                                <li><a href="{{route('subsupplier.create')}}"><i class='bx bx-radio-circle'></i>New Subsupplier</a></li>
                            </ul>
                        </li>

                            <li><a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/pur.ico') }}"  style="width:25px; margin:10px" alt="icon"></i>Purchase Orders</a>
                            <ul>
                                <li><a href="{{route('subpurchase.index')}}"><i class='bx bx-radio-circle'></i>View Purchase Orders</a></li>
                                <li><a href="{{route('subpurchase.create')}}"><i class='bx bx-radio-circle'></i>Add Purchase Order</a></li>
                            </ul>
                        </li>

                        <li><a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/order.ico') }}"  style="width:25px; margin:10px" alt="icon"></i>Orders Recieved</a>
                            <ul>
                                <li><a href="{{route('suborder.index')}}"><i class='bx bx-radio-circle'></i>View Recieved Orders</a></li>
                                <li><a href="{{route('suborder.create')}}"><i class='bx bx-radio-circle'></i>Add Recieved Order</a></li>
                            </ul>
                        </li>

                        </ul>
                        </li>
                        <li> <a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/sat.ico') }}"  style="width:30px; margin:10px" alt="icon"></i>Stationery</a>
                        <ul>
                          <li><a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/satissue.ico') }}"  style="width:35px; margin:5px" alt="icon"></i>Stationery Issued</a>
                            <ul>
                                <li><a href="{{route('particular.index')}}"><i class='bx bx-radio-circle'></i>New Particular</a></li>
                                <li><a href="{{route('stationary.index')}}"><i class='bx bx-radio-circle'></i>View Stationery Issued</a></li>
                                <li><a href="{{route('stationary.create')}}"><i class='bx bx-radio-circle'></i>Add Stationery Issued</a></li>
                            </ul>
                          </li>

                          <li><a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/satissue.ico') }}"  style="width:35px; margin:5px" alt="icon"></i> Orders</a>
                            <ul>
                                <li><a href="{{route('order.index')}}"><i class='bx bx-radio-circle'></i>View Order</a></li>
                                <li><a href="{{route('order.create')}}"><i class='bx bx-radio-circle'></i>Add Order</a></li>
                            </ul>
                          </li>

                          {{-- <li><a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/part.ico') }}"  style="width:25px; margin:10px" alt="icon"></i>Particular</a>
                            <ul>
                                <li><a href="{{route('particular.index')}}"><i class='bx bx-radio-circle'></i>View Particular</a></li>
                            </ul>
                          </li> --}}
                        </ul>
                        </li>
                    </ul>
                </li>
            </ul>
			<!--end navigation-->
		</div>
