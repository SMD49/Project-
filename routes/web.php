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
