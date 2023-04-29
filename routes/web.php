<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/items-trans', function(){
    $stocks = \App\Models\Stock::with('user', 'item')->get();
  
    return view('item', ['stocks' => $stocks]);
});

Route::get('/home/customer', function(){

    $customers = \App\Models\Customer::with('user', 'items', 'stocks')->get();
    
    return view('customer', ['customers' => $customers]);



    // previous code
    // $customers = \App\Models\Customer::with('user', 'items')->get();
    // $trans = \App\Models\Stock::where('type', 'purchase')->get()->toArray();
    
    // return view('customer', ['customers' => $customers], ['trans' => $trans]);
});


Route::get('/home/supplier', function(){

    $suppliers = \App\Models\Supplier::with('user', 'items')->get();
    return view('supplier', ['suppliers' => $suppliers]);





// previous code 
    // $suppliers = \App\Models\Supplier::with('user', 'items')->get();
    // $trans = \App\Models\Stock::where('type', 'sale')->get()->toArray();
    
    // return view('supplier', ['suppliers' => $suppliers], ['trans' => $trans]);
});
