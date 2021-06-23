<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

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
    $product1 = array(
        'product_name'=> 'Product 1',
        'product_desc'=> 'This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.'
    );
    $product2 = array(
        'product_name'=> 'Product 2',
        'product_desc'=> 'This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.'
    );
    $product3 = array(
        'product_name'=> 'Product 3',
        'product_desc'=> 'This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.This is a product I want to sell. It is a good product and will be best selling in upcoming days.'
    );
    $products_list = array($product1, $product2, $product3);
    return view('products',['products' => $products_list] );
});
Route::get('/product', function () {
    return view('product');
});

Route::get('/create_product', function(){
    Product::create([
        'product_name' => 'Mobile',
        'product_desc' => ' This is smart phone of latest model',
        'price' => '25000',
        'image' => ''
    ]);
});

Route::get('/get_product',function(){
    $products = Product::get();
    return $products;
});