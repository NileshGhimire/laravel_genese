<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;

use App\Http\Controllers\ProductsController;

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
    $products= Product::all();
    return view('products' ,['products' => $products ]);
});
Route::get('/products/{product}', function (Product $product) {
    // $product= Product::find($id);
    return view('product',['product' => $product]);
});

Route::get('/home', [ProductsController::class,'Index']);

Route::get('/categories/{category}', function(Category $category ){
    // $products = Product::whereCategoryId($category ->id);
    $products = $category->products;
    return view('category',['products' => $products, 'category'=>$category]);
});


// admin route
Route::get('/admin/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'Index'])->name('dashboard');
Route::get('/admin/products',[App\Http\Controllers\Admin\productsController::class,'Index'])->name('product_list');
Route::get('/admin/products/create',[App\Http\Controllers\Admin\productsController::class,'create'])->name('create_product');
Route::post('/admin/products/store',[App\Http\Controllers\Admin\productsController::class,'store']);
Route::get('/admin/products/edit/{product}',[App\Http\Controllers\Admin\productsController::class,'edit']);