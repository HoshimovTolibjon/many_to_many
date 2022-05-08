<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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

Route::get('/user', function () {
    return view('index');
});


Route::get('/create-user',function (){
    return view('add_user');
});

Route::get('/create-role',function (){
    return view('add_role');
});

Route::post('/store-user',function (Request $request){

    $user = new \App\Models\User();
    $user->name = $request->name;
    $user->save();

    $u = \App\Models\User::all()->last();
    $u_id = $u->id;
    $roles = $request->roles;

    foreach ($roles as $role){
        $role_user = new \App\Models\UserRole();
        $role_user->user_id = $u_id;
        $role_user->role_id = $role;
        $role_user->save();
    }

    return redirect('/');
});

Route::post('/store-role',function (Request $request){
     $role = new \App\Models\Role();
     $role->name = $request->name;
     $role->save();

     return redirect()->back();
});

//category
Route::get('/create-category',[CategoryController::class,'create'])->name('create.category');
Route::post('/store-category',[CategoryController::class,'store'])->name('store.category');

//product
Route::get('/',[ProductController::class,'index']);
Route::get('/create-product',[ProductController::class,'create'])->name('create.product');
Route::post('/store-product',[ProductController::class,'store'])->name('store.product');



