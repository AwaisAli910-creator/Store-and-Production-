<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Admin</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{ route('admin.dashboard') }}" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>

				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Production</div>
					</a>
					<ul>
						<li> <a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Produt</div>
					</a>
				     	<ul>
						</li>
						<li> <a href="/admin/production/product/create"><i class='bx bx-radio-circle'></i>Add Product</a>
						</li>
						<li> <a href="/admin/production/product"><i class='bx bx-radio-circle'></i>View Product</a>
						</li>
						</ul>
					</ul>

					<ul>
						<li> <a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Order</div>
					</a>
				     	<ul>
						</li>
						<li> <a href="/admin/production/order/create"><i class='bx bx-radio-circle'></i>Add Order</a>
						</li>
						<li> <a href="/admin/production/order"><i class='bx bx-radio-circle'></i>View Order</a>
						</li>
						</ul>
					</ul>
				</li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><img src="{{ asset('/backend/assets/images/s1.ico') }}"  style="width:30px; margin-left:-6px" alt="icon">
                        </div>
                        <div class="menu-title">Store</div>
                    </a>
                    <ul>
                        <li> <a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/raw.ico') }}"  style="width:30px; margin:10px" alt="icon"></i>Raw Material</a>
                            <ul>
                                <li><a href="{{route('adminraw-material.index')}}"><i class='bx bx-radio-circle'></i>View Raw Materials</a></li>
                                <li><a href="{{route('adminraw-material.create')}}"><i class='bx bx-radio-circle'></i>Add Raw Materials</a></li>
                            </ul>
                        </li>

                        <li> <a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/v1_1.ico') }}"  style="width:30px; margin:10px" alt="icon"></i>vendor</a>
                            <ul>
                                <li> <a href="{{route('adminvendor.index')}}"><i class='bx bx-radio-circle'></i>View vendor</a>
                                </li>
                                <li> <a href="{{route('adminvendor.create')}}"><i class='bx bx-radio-circle'></i>Add vendor</a>
                                </li>
                            </ul>
                        </li>

                        <li><a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/inventory.ico') }}"  style="width:30px; margin:10px" alt="icon"></i>Inventory</a>
                            <ul>
                                <li><a href="{{route('admininventory.index')}}"><i class='bx bx-radio-circle'></i>View Inventory</a></li>
                                <li><a href="{{route('admininventory.create')}}"><i class='bx bx-radio-circle'></i>Add Inventory</a></li>
                            </ul>
                        </li>

                        <li> <a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/p.ico') }}"  style="width:30px; margin:10px" alt="icon"></i>product</a>
                            <ul>
                                <li> <a href="{{route('adminproduct.index')}}"><i class='bx bx-radio-circle'></i>View Product</a>
                                </li>
                                <li> <a href="{{route('adminproduct.create')}}"><i class='bx bx-radio-circle'></i>Add Product</a>
                                </li>
                            </ul>
                        </li>
                        <li> <a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/sub.ico') }}"  style="width:30px; margin:10px" alt="icon"></i>Sub Supplier</a>
                        <ul>

                        <li><a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/ss.ico') }}"  style="width:25px; margin:10px" alt="icon">Subsupplier</a>
                            <ul>
                                <li><a href="{{route('adminsubsupplier.index')}}"><i class='bx bx-radio-circle'></i>View Subsupplier</a></li>
                                <li><a href="{{route('adminsubsupplier.create')}}"><i class='bx bx-radio-circle'></i>New Subsupplier</a></li>
                            </ul>
                        </li>

                            <li><a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/pur.ico') }}"  style="width:25px; margin:10px" alt="icon"></i>Purchase Orders</a>
                            <ul>
                                <li><a href="{{route('adminsubpurchase.index')}}"><i class='bx bx-radio-circle'></i>View Purchase Orders</a></li>
                                <li><a href="{{route('adminsubpurchase.create')}}"><i class='bx bx-radio-circle'></i>Add Purchase Order</a></li>
                            </ul>
                        </li>

                        <li><a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/order.ico') }}"  style="width:25px; margin:10px" alt="icon"></i>Orders Recieved</a>
                            <ul>
                                <li><a href="{{route('adminsuborder.index')}}"><i class='bx bx-radio-circle'></i>View Recieved Orders</a></li>
                                <li><a href="{{route('adminsuborder.create')}}"><i class='bx bx-radio-circle'></i>Add Recieved Order</a></li>
                            </ul>
                        </li>

                        </ul>
                        </li>
                        <li> <a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/sat.ico') }}"  style="width:30px; margin:10px" alt="icon"></i>Stationery</a>
                        <ul>
                          <li><a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/satissue.ico') }}"  style="width:35px; margin:5px" alt="icon"></i>Stationery Issued</a>
                            <ul>
                                <li><a href="{{route('adminstationary.index')}}"><i class='bx bx-radio-circle'></i>View Stationery Issued</a></li>
                                <li><a href="{{route('adminstationary.create')}}"><i class='bx bx-radio-circle'></i>Add Stationery Issued</a></li>
                            </ul>
                          </li>

                          <li><a href="javascript:;" class="has-arrow"><img src="{{ asset('/backend/assets/images/part.ico') }}"  style="width:25px; margin:10px" alt="icon"></i>Particular</a>
                            <ul>
                                <li><a href="{{route('adminparticular.index')}}"><i class='bx bx-radio-circle'></i>View Particular</a></li>
                                <li><a href="{{route('adminparticular.create')}}"><i class='bx bx-radio-circle'></i>New Particular</a></li>
                            </ul>
                          </li>
                        </ul>
                        </li>
                    </ul>
                </li>


				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-line-chart"></i>
						</div>
						<div class="menu-title">Charts</div>
					</a>
					<ul>
						<li> <a href="charts-apex-chart.html"><i class='bx bx-radio-circle'></i>Apex</a>
						</li>
						<li> <a href="charts-chartjs.html"><i class='bx bx-radio-circle'></i>Chartjs</a>
						</li>
						<li> <a href="charts-highcharts.html"><i class='bx bx-radio-circle'></i>Highcharts</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-map-alt"></i>
						</div>
						<div class="menu-title">Maps</div>
					</a>
					<ul>
						<li> <a href="map-google-maps.html"><i class='bx bx-radio-circle'></i>Google Maps</a>
						</li>
						<li> <a href="map-vector-maps.html"><i class='bx bx-radio-circle'></i>Vector Maps</a>
						</li>
					</ul>
				</li>



			</ul>
			<!--end navigation-->
		</div>
