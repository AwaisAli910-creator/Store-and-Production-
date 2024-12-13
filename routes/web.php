<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// Admin Controllers
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminOrderController;
// Admin Store Controllers
use App\Http\Controllers\AdminStoreController;
use App\Http\Controllers\AdminRawMaterialController;
use App\Http\Controllers\AdminInventoryController;
use App\Http\Controllers\AdminSubsupplierController;
use App\Http\Controllers\AdminSubpurchaseController;
use App\Http\Controllers\AdminSuborderController;
use App\Http\Controllers\AdminStoreProductController;
use App\Http\Controllers\AdminVendorController;
use App\Http\Controllers\AdminStationaryController;
use App\Http\Controllers\AdminParticularController;
use App\Http\Controllers\AdminFinanceController;
use App\Http\Controllers\HrController;
use App\Http\Controllers\QualityController;
// Store Controllers
use App\Http\Controllers\StoreController;
use App\Http\Controllers\RawMaterialController;
use App\Http\Controllers\RawMaterialOutController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\SubsupplierController;
use App\Http\Controllers\SubpurchaseController;
use App\Http\Controllers\SuborderController;
use App\Http\Controllers\StoreProductController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\StationaryController;
use App\Http\Controllers\ParticularController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\RawbrandController;

// Production Controllers
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RawbrandprodController;
use App\Http\Controllers\RawMaterialProductController;
// User Controller
use App\Http\Controllers\UserController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'roles:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'Adminlogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/password/update', [AdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update');
    // Admin Production Controllers
    //Product Routes
    Route::get('/admin/production/product', [AdminProductController::class, 'index'])->name('adminproduct.index');
    Route::get('/admin/production/product/create', [AdminProductController::class, 'create'])->name('adminproduct.create');
    Route::post('/admin/production/product', [AdminProductController::class, 'store'])->name('adminproduct.store');
    Route::get('/admin/production/product/{product}', [AdminProductController::class, 'show'])->name('adminproduct.show');
    Route::get('/admin/production/product/{product}/edit', [AdminProductController::class, 'edit'])->name('adminproduct.edit');
    Route::put('/admin/production/product/{product}', [AdminProductController::class, 'update'])->name('adminproduct.update');
    Route::delete('/admin/production/product/{product}', [AdminProductController::class, 'destroy'])->name('adminproduct.destroy');
    // Order Routes
    Route::get('/admin/production/order', [AdminOrderController::class, 'index'])->name('adminorder.index');
    Route::get('/admin/production/order/create', [AdminOrderController::class, 'create'])->name('adminorder.create');
    Route::post('/admin/production/order', [AdminOrderController::class, 'store'])->name('adminorder.store');
    Route::get('/admin/production/order/{order}', [AdminOrderController::class, 'show'])->name('adminorder.show');
    Route::get('/admin/production/order/{order}/edit', [AdminOrderController::class, 'edit'])->name('adminorder.edit');
    Route::put('/admin/production/order/{order}', [AdminOrderController::class, 'update'])->name('adminorder.update');
    Route::delete('/admin/production/order/{order}', [AdminOrderController::class, 'destroy'])->name('adminorder.destroy');


    // Admin Store Routes

// Raw material  routes
Route::get('/admin/store/raw-material', [AdminRawMaterialController::class, 'index'])->name('adminraw-material.index');
Route::get('/admin/store/raw-material/create', [AdminRawMaterialController::class, 'create'])->name('adminraw-material.create');
Route::post('/admin/store/raw-material', [AdminRawMaterialController::class, 'store'])->name('adminraw-material.store');
Route::get('/admin/store/raw-material/{id}', [AdminRawMaterialController::class, 'show'])->name('adminraw-material.show');
Route::get('/admin/store/raw-material/{id}/edit', [AdminRawMaterialController::class, 'edit'])->name('adminraw-material.edit');
Route::put('/admin/store/raw-material/{id}', [AdminRawMaterialController::class, 'update'])->name('adminraw-material.update');
Route::delete('/admin/store/raw-material/{id}', [AdminRawMaterialController::class, 'destroy'])->name('adminraw-material.destroy');

// Inventory routes
Route::get('/admin/store/inventory', [AdminInventoryController::class, 'index'])->name('admininventory.index');
Route::get('/admin/store/inventory/create', [AdminInventoryController::class, 'create'])->name('admininventory.create');
Route::post('/admin/store/inventory', [AdminInventoryController::class, 'store'])->name('admininventory.store');
Route::get('/admin/store/inventory/{id}', [AdminInventoryController::class, 'show'])->name('admininventory.show');
Route::get('/admin/store/inventory/{id}/edit', [AdminInventoryController::class, 'edit'])->name('admininventory.edit');
Route::put('/admin/store/inventory/{id}', [AdminInventoryController::class, 'update'])->name('admininventory.update');
Route::delete('/admin/store/inventory/{id}', [AdminInventoryController::class, 'destroy'])->name('admininventory.destroy');

// Subsupplier routes
Route::get('/admin/store/subsupplier', [AdminSubsupplierController::class, 'index'])->name('adminsubsupplier.index');
Route::get('/admin/store/subsupplier/create', [AdminSubsupplierController::class, 'create'])->name('adminsubsupplier.create');
Route::post('/admin/store/subsupplier', [AdminSubsupplierController::class, 'store'])->name('adminsubsupplier.store');
Route::get('/admin/store/subsupplier/{id}', [AdminSubsupplierController::class, 'show'])->name('adminsubsupplier.show');
Route::get('/admin/store/subsupplier/{id}/edit', [AdminSubsupplierController::class, 'edit'])->name('adminsubsupplier.edit');
Route::put('/admin/store/subsupplier/{id}', [AdminSubsupplierController::class, 'update'])->name('adminsubsupplier.update');
Route::delete('/admin/store/subsupplier/{id}', [AdminSubsupplierController::class, 'destroy'])->name('adminsubsupplier.destroy');

// Subsupplier purchase order routes
Route::get('/admin/store/subsupplierr/purchase', [AdminSubpurchaseController::class, 'index'])->name('adminsubpurchase.index');
Route::get('/admin/store/subsupplier/purchase/create', [AdminSubpurchaseController::class, 'create'])->name('adminsubpurchase.create');
Route::post('/admin/store/subsupplier/purchase', [AdminSubpurchaseController::class, 'store'])->name('adminsubpurchase.store');
Route::get('/admin/store/subsupplier/purchase/{id}', [AdminSubpurchaseController::class, 'show'])->name('adminsubpurchase.show');
Route::get('/admin/store/subsupplier/purchase/{id}/edit', [AdminSubpurchaseController::class, 'edit'])->name('adminsubpurchase.edit');
Route::put('/admin/store/subsupplier/purchase/{id}', [AdminSubpurchaseController::class, 'update'])->name('adminsubpurchase.update');
Route::delete('/admin/store/subsupplier/purchase/{id}', [AdminSubpurchaseController::class, 'destroy'])->name('adminsubpurchase.destroy');
// Subsupplier order received routes
Route::get('/admin/store/subsupplierrr/order', [AdminSuborderController::class, 'index'])->name('adminsuborder.index');
Route::get('/admin/store/subsupplier/order/create', [AdminSuborderController::class, 'create'])->name('adminsuborder.create');
Route::post('/admin/store/subsupplier/order', [AdminSuborderController::class, 'store'])->name('adminsuborder.store');
Route::get('/admin/store/subsupplier/order/{id}', [AdminSuborderController::class, 'show'])->name('adminsuborder.show');
Route::get('/admin/store/subsupplier/order/{id}/edit', [AdminSuborderController::class, 'edit'])->name('adminsuborder.edit');
Route::put('/admin/store/subsupplier/order/{id}', [AdminSuborderController::class, 'update'])->name('adminsuborder.update');
Route::delete('/admin/store/subsupplier/order/{id}', [AdminSuborderController::class, 'destroy'])->name('adminsuborder.destroy');
// Product routes
Route::get('/admin/store/product', [AdminStoreProductController::class, 'index'])->name('adminstoreproduct.index');
Route::get('/admin/store/product/create', [AdminStoreProductController::class, 'create'])->name('adminstoreproduct.create');
Route::post('/admin/store/product', [AdminStoreProductController::class, 'store'])->name('adminstoreproduct.store');
Route::get('/admin/store/product/{id}', [AdminStoreProductController::class, 'show'])->name('adminstoreproduct.show');
Route::get('/admin/store/product/{id}/edit', [AdminStoreProductController::class, 'edit'])->name('adminstoreproduct.edit');
Route::put('/admin/store/product/{id}', [AdminStoreProductController::class, 'update'])->name('adminstoreproduct.update');
Route::delete('/admin/store/product/{id}', [AdminStoreProductController::class, 'destroy'])->name('adminstoreproduct.destroy');

// Vendor routes
Route::get('/admin/store/vendor', [AdminVendorController::class, 'index'])->name('adminvendor.index');
Route::get('/admin/store/vendor/create', [AdminVendorController::class, 'create'])->name('adminvendor.create');
Route::post('/admin/store/vendor', [AdminVendorController::class, 'store'])->name('adminvendor.store');
Route::get('/admin/store/vendor/{id}', [AdminVendorController::class, 'show'])->name('adminvendor.show');
Route::get('/admin/store/vendor/{id}/edit', [AdminVendorController::class, 'edit'])->name('adminvendor.edit');
Route::put('/admin/store/vendor/{id}', [AdminVendorController::class, 'update'])->name('adminvendor.update');
Route::delete('/admin/store/vendor/{id}', [AdminVendorController::class, 'destroy'])->name('adminvendor.destroy');

// Stationary routes
Route::get('/admin/store/stationary', [AdminStationaryController::class, 'index'])->name('adminstationary.index');
Route::get('/admin/store/stationary/create', [AdminStationaryController::class, 'create'])->name('adminstationary.create');
Route::post('/admin/store/stationary', [AdminStationaryController::class, 'store'])->name('adminstationary.store');
Route::get('/admin/store/stationary/{id}', [AdminStationaryController::class, 'show'])->name('adminstationary.show');
Route::get('/admin/store/stationary/{id}/edit', [AdminStationaryController::class, 'edit'])->name('adminstationary.edit');
Route::put('/admin/store/stationary/{id}', [AdminStationaryController::class, 'update'])->name('adminstationary.update');
Route::delete('/admin/store/stationary/{id}', [AdminStationaryController::class, 'destroy'])->name('adminstationary.destroy');

// Stationary Particular routes
Route::get('/admin/store/particular', [AdminParticularController::class, 'index'])->name('adminparticular.index');
Route::get('/admin/store/particular/create', [AdminParticularController::class, 'create'])->name('adminparticular.create');
Route::post('/admin/store/particular', [AdminParticularController::class, 'store'])->name('adminparticular.store');
Route::get('/admin/store/particular/{id}', [AdminParticularController::class, 'show'])->name('adminparticular.show');
Route::get('/admin/store/particular/{id}/edit', [AdminParticularController::class, 'edit'])->name('adminparticular.edit');
Route::put('/admin/store/particular/{id}', [AdminParticularController::class, 'update'])->name('adminparticular.update');
Route::delete('/admin/store/particular/{id}', [AdminParticularController::class, 'destroy'])->name('adminparticular.destroy');
Route::get('/admin/store/particular/search_data', [AdminParticularController::class, 'search'])->name('adminparticular.search');

});

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::get('/production/login', [ProductionController::class, 'ProductionLogin'])->name('production.login');
Route::get('/store/login', [StoreController::class, 'StoreLogin'])->name('store.login');


Route::middleware(['auth', 'roles:hr'])->group(function(){
    Route::get('/hr/dashboard', [HrController::class, 'HrDashboard'])->name('hr.dashboard');
});

Route::middleware(['auth', 'roles:quality'])->group(function(){
    Route::get('/quality/dashboard', [QualityController::class, 'QualityDashboard'])->name('quality.dashboard');
});

Route::middleware(['auth', 'roles:store'])->group(function(){
    Route::get('/store/dashboard', [StoreController::class, 'StoreDashboard'])->name('store.dashboard');
    Route::get('/store/logout', [StoreController::class, 'Storelogout'])->name('store.logout');
    Route::get('/store/profile', [StoreController::class, 'StoreProfile'])->name('store.profile');
    Route::post('/store/profile/store', [StoreController::class, 'StoreProfileStore'])->name('store.profile.store');
    Route::get('/store/change/password', [StoreController::class, 'StoreChangePassword'])->name('store.change.password');
    Route::post('/store/password/update', [StoreController::class, 'StorePasswordUpdate'])->name('store.password.update');
   // Raw materials routes
Route::get('/store/raw-material_in', [RawMaterialController::class, 'index'])->name('raw-material.index');
Route::get('/store/raw-material_in/create', [RawMaterialController::class, 'create'])->name('raw-material.create');
Route::post('/store/raw-material_in', [RawMaterialController::class, 'store'])->name('raw-material.store');
Route::get('/store/raw-material_in/{id}', [RawMaterialController::class, 'show'])->name('raw-material.show');
Route::get('/store/raw-material_in/{id}/edit', [RawMaterialController::class, 'edit'])->name('raw-material.edit');
Route::put('/store/raw-material_in/{id}', [RawMaterialController::class, 'update'])->name('raw-material.update');
Route::delete('/store/raw-material_in/{id}', [RawMaterialController::class, 'destroy'])->name('raw-material.destroy');
Route::get('/store/raw-material_in/search_data', [RawMaterialController::class, 'search'])->name('raw-material.search');


Route::get('/store/raw-materialout', [RawMaterialOutController::class, 'index'])->name('raw-materialout.index');
Route::get('/store/raw-materialout/create', [RawMaterialOutController::class, 'create'])->name('raw-materialout.create');
Route::post('/store/raw-materialout', [RawMaterialOutController::class, 'store'])->name('raw-materialout.store');
Route::get('/store/raw-materialout/{id}', [RawMaterialOutController::class, 'show'])->name('raw-materialout.show');
Route::get('/store/raw-materialout/{id}/edit', [RawMaterialOutController::class, 'edit'])->name('raw-materialout.edit');
Route::put('/store/raw-materialout/{id}', [RawMaterialOutController::class, 'update'])->name('raw-materialout.update');
Route::delete('/store/raw-materialout/{id}', [RawMaterialOutController::class, 'edit'])->name('raw-materialout.qi');
Route::get('/store/raw-materialoutt/search_data', [RawMaterialOutController::class, 'search'])->name('raw-materialout.search');
Route::get('/store/raw-materialoutt/search_data/title', [RawMaterialOutController::class, 'Title'])->name('raw-materialout.title.search');
// Route::get('/store/raw-materialout/fetch-quantity', [RawMaterialOutController::class, 'fetchQuantity'])->name('fetch.quantity');




// Inventory routes
Route::get('/store/inventory', [InventoryController::class, 'index'])->name('inventory.index');
Route::get('/store/inventory/create', [InventoryController::class, 'create'])->name('inventory.create');
Route::post('/store/inventory', [InventoryController::class, 'store'])->name('inventory.store');
Route::get('/store/inventory/{id}', [InventoryController::class, 'show'])->name('inventory.show');
Route::get('/store/inventory/{id}/edit', [InventoryController::class, 'edit'])->name('inventory.edit');
Route::put('/store/inventory/{id}', [InventoryController::class, 'update'])->name('inventory.update');
Route::delete('/store/inventory/{id}', [InventoryController::class, 'destroy'])->name('inventory.destroy');
Route::get('/store/inventoryy/search_data', [InventoryController::class, 'search'])->name('inventory.search');

// Subsupplier routes
Route::get('/store/subsupplier', [SubsupplierController::class, 'index'])->name('subsupplier.index');
Route::get('/store/subsupplier/create', [SubsupplierController::class, 'create'])->name('subsupplier.create');
Route::post('/store/subsupplier', [SubsupplierController::class, 'store'])->name('subsupplier.store');
Route::get('/store/subsupplier/{id}', [SubsupplierController::class, 'show'])->name('subsupplier.show');
Route::get('/store/subsupplier/{id}/edit', [SubsupplierController::class, 'edit'])->name('subsupplier.edit');
Route::put('/store/subsupplier/{id}', [SubsupplierController::class, 'update'])->name('subsupplier.update');
Route::delete('/store/subsupplier/{id}', [SubsupplierController::class, 'destroy'])->name('subsupplier.destroy');
Route::get('/store/subsupplierrr/search_data', [SubsupplierController::class, 'search'])->name('subsupplier.search');

// Subsupplier purchase order routes
Route::get('/store/subsupplierr/purchase', [SubpurchaseController::class, 'index'])->name('subpurchase.index');
Route::get('/store/subsupplier/purchase/create', [SubpurchaseController::class, 'create'])->name('subpurchase.create');
Route::post('/store/subsupplier/purchase', [SubpurchaseController::class, 'store'])->name('subpurchase.store');
Route::get('/store/subsupplier/purchase/{id}', [SubpurchaseController::class, 'show'])->name('subpurchase.show');
Route::get('/store/subsupplier/purchase/{id}/edit', [SubpurchaseController::class, 'edit'])->name('subpurchase.edit');
Route::put('/store/subsupplier/purchase/{id}', [SubpurchaseController::class, 'update'])->name('subpurchase.update');
Route::delete('/store/subsupplier/purchase/{id}', [SubpurchaseController::class, 'destroy'])->name('subpurchase.destroy');
Route::get('/store/subsupplierrrrrr/search_data', [SubpurchaseController::class, 'search'])->name('subpurchase.search');

// Subsupplier order received routes
Route::get('/store/subsupplierrr/order', [SuborderController::class, 'index'])->name('suborder.index');
Route::get('/store/subsupplier/order/create', [SuborderController::class, 'create'])->name('suborder.create');
Route::post('/store/subsupplier/order', [SuborderController::class, 'store'])->name('suborder.store');
Route::get('/store/subsupplier/order/{id}', [SuborderController::class, 'show'])->name('suborder.show');
Route::get('/store/subsupplier/order/{id}/edit', [SuborderController::class, 'edit'])->name('suborder.edit');
Route::put('/store/subsupplier/order/{id}', [SuborderController::class, 'update'])->name('suborder.update');
Route::delete('/store/subsupplier/order/{id}', [SuborderController::class, 'destroy'])->name('suborder.destroy');
Route::get('/store/subsupplierr/search_data', [SuborderController::class, 'search'])->name('suborder.search');

// Product routes
Route::get('/store/product', [StoreProductController::class, 'index'])->name('storeproduct.index');
Route::get('/store/product/create', [StoreProductController::class, 'create'])->name('storeproduct.create');
Route::post('/store/product', [StoreProductController::class, 'store'])->name('storeproduct.store');
Route::get('/store/product/{id}', [StoreProductController::class, 'show'])->name('storeproduct.show');
Route::get('/store/product/{id}/edit', [StoreProductController::class, 'edit'])->name('storeproduct.edit');
Route::put('/store/product/{id}', [StoreProductController::class, 'update'])->name('storeproduct.update');
Route::delete('/store/product/{id}', [StoreProductController::class, 'destroy'])->name('storeproduct.destroy');
Route::get('/store/productt/search_data', [StoreProductController::class, 'search'])->name('storeproduct.search');

// Vendor routes
Route::get('/store/vendor', [VendorController::class, 'index'])->name('vendor.index');
Route::get('/store/vendor/create', [VendorController::class, 'create'])->name('vendor.create');
Route::post('/store/vendor', [VendorController::class, 'store'])->name('vendor.store');
Route::get('/store/vendor/{id}', [VendorController::class, 'show'])->name('vendor.show');
Route::get('/store/vendor/{id}/edit', [VendorController::class, 'edit'])->name('vendor.edit');
Route::put('/store/vendor/{id}', [VendorController::class, 'update'])->name('vendor.update');
Route::delete('/store/vendor/{id}', [VendorController::class, 'destroy'])->name('vendor.destroy');
Route::get('/store/vender/search_data', [VendorController::class, 'search'])->name('vendor.search');

// Stationary routes
Route::get('/store/stationary', [StationaryController::class, 'index'])->name('stationary.index');
Route::get('/store/stationary/create', [StationaryController::class, 'create'])->name('stationary.create');
Route::post('/store/stationary', [StationaryController::class, 'store'])->name('stationary.store');
Route::get('/store/stationary/{id}', [StationaryController::class, 'show'])->name('stationary.show');
Route::get('/store/stationary/{id}/edit', [StationaryController::class, 'edit'])->name('stationary.edit');
Route::put('/store/stationary/{id}', [StationaryController::class, 'update'])->name('stationary.update');
Route::delete('/store/stationary/{id}', [StationaryController::class, 'destroy'])->name('stationary.destroy');
Route::get('/store/stationaryy/search_data', [StationaryController::class, 'search'])->name('stationary.search');

// Stationary Particular routes
Route::get('/store/particular', [ParticularController::class, 'index'])->name('particular.index');
Route::get('/store/particular/create', [ParticularController::class, 'create'])->name('particular.create');
Route::post('/store/particular', [ParticularController::class, 'store'])->name('particular.store');
Route::get('/store/particular/{id}', [ParticularController::class, 'show'])->name('particular.show');
Route::get('/store/particular/{id}/edit', [ParticularController::class, 'edit'])->name('particular.edit');
Route::put('/store/particular/{id}', [ParticularController::class, 'update'])->name('particular.update');
Route::delete('/store/particular/{id}', [ParticularController::class, 'destroy'])->name('particular.destroy');
Route::get('/store/particular/search_data', [ParticularController::class, 'search'])->name('particular.search');


/// Quantity In Raw Metherial Products //

// Route::get('/store/rawbrandproduct', [RawbrandprodController::class, 'index'])->name('rawbrandproduct.indexx');
Route::get('/store/rawbrandproduct', [RawbrandprodController::class, 'index'])->name('rawbrandprod.indexx');

Route::get('/store/rawbrandproduct/quantityout', [RawbrandprodController::class, 'showQuantityOutForm'])->name('quantityout.show');
Route::post('/store/rawbrandproduct/quantityout', [RawbrandprodController::class, 'storeQuantityOut'])->name('quantityout.store');

Route::get('/store/rawbrandproduct/create', [RawbrandprodController::class, 'create'])->name('rawbrandprod.create');
Route::post('/store/rawbrandproduct', [RawbrandprodController::class, 'store'])->name('rawbrandprod.store');
Route::get('/store/rawbrandproduct/{id}', [RawbrandprodController::class, 'show'])->name('rawbrandprod.show');
Route::get('/store/rawbrandproduct/{id}/edit', [RawbrandprodController::class, 'edit'])->name('rawbrandprod.edit');
Route::put('/store/rawbrandproduct/{id}', [RawbrandprodController::class, 'update'])->name('rawbrandprod.update');
Route::delete('/store/rawbrandproduct/{id}', [RawbrandprodController::class, 'destroy'])->name('rawbrandprod.destroy');
Route::get('/store/rawbrandproduct/search_data', [RawbrandprodController::class, 'search'])->name('rawbrandprod.search');

// Raw Material Brand //

Route::get('/store/rawmaterialbrand', [RawbrandController::class, 'index'])->name('rawbrand.index');
Route::get('/store/rawmaterialbrand/create', [RawbrandController::class, 'create'])->name('rawbrand.create');
Route::post('/store/rawmaterialbrand', [RawbrandController::class, 'store'])->name('rawbrand.store');
Route::get('/store/rawmaterialbrand/{id}', [RawbrandController::class, 'show'])->name('rawbrand.show');
Route::get('/store/rawmaterialbrand/{id}/edit', [RawbrandController::class, 'edit'])->name('rawbrand.edit');
Route::put('/store/rawmaterialbrand/{id}', [RawbrandController::class, 'update'])->name('rawbrand.update');
Route::delete('/store/rawmaterialbrand/{id}', [RawbrandController::class, 'destroy'])->name('rawbrand.destroy');
Route::get('/store/rawmaterialbrandd/search_data', [RawbrandController::class, 'search'])->name('rawbrand.search');

// raw-materialbrand.index


// Order Tbale
Route::get('/store/order', [OrderController::class, 'index'])->name('order.index');
Route::get('/store/order/create', [OrderController::class, 'create'])->name('order.create');
Route::post('/store/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/store/order/{id}', [OrderController::class, 'show'])->name('order.show');
Route::get('/store/order/{id}/edit', [OrderController::class, 'edit'])->name('order.edit');
Route::put('/store/order/{id}', [OrderController::class, 'update'])->name('order.update');
Route::delete('/store/order/{id}', [OrderController::class, 'destroy'])->name('order.destroy');
Route::get('/store/order/search_data', [OrderController::class, 'search'])->name('order.search');


Route::get('/store/rawmaterialproduct', [RawMaterialProductController::class, 'index'])->name('rawmaterialproduct.index');
Route::get('/store/rawmaterialproduct/create', [RawMaterialProductController::class, 'create'])->name('rawmaterialproduct.create');
Route::post('/store/rawmaterialproduct', [RawMaterialProductController::class, 'store'])->name('rawmaterialproduct.store');
Route::get('/store/rawmaterialproduct/{id}', [RawMaterialProductController::class, 'show'])->name('rawmaterialproduct.show');
Route::get('/store/rawmaterialproduct/{id}/edit', [RawMaterialProductController::class, 'edit'])->name('rawmaterialproduct.edit');
Route::put('/store/rawmaterialproduct/{id}', [RawMaterialProductController::class, 'update'])->name('rawmaterialproduct.update');
Route::delete('/store/rawmaterialproduct/{id}', [RawMaterialProductController::class, 'destroy'])->name('rawmaterialproduct.destroy');
Route::get('/store/rawmaterialproduct/search_data', [RawMaterialProductController::class, 'search'])->name('rawmaterialproduct.search');

});

Route::middleware(['auth', 'roles:finance'])->group(function(){
    Route::get('/finance/dashboard', [FinanceController::class, 'FinanceDashboard'])->name('finance.dashboard');
});

