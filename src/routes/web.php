<?php

use Cchivhima\Sendfood\Http\Controllers\SendFoodUiController; //Import Send Food UI controller -> this controller controls all aspects of UI
use Cchivhima\Sendfood\Http\Controllers\ProductsController; //Import Send Food Products Controller -> this controller controls all aspects of Products
use Cchivhima\Sendfood\Http\Controllers\PurchaseController; //Import Send Food Products Purchase Controller -> this controller controls all aspects of Products purchase
use Cchivhima\Sendfood\Http\Controllers\BeneficiaryController; //Import Send Food Beneficiaries Controller -> this controller controls all aspects of Beneficiaries
use Cchivhima\Sendfood\Http\Controllers\ReceivingMethodsController; //Import Send Food payment methods Controller -> this controller controls all aspects of Payment Methods 
/** Send food package UI **/
Route::get('/sendfooddashboard', [SendFoodUiController::class, 'dashboard']); //render the sendfood dashboard
/** Send food package UI **/

/** Send food package Products plugin **/
Route::group(['middleware' => ['web']], function () {
    Route::get('hampers', [ProductsController::class, 'hampers']); //render the sendfood hamper list
    Route::get('/items', [ProductsController::class, 'singleItems']); //render the sendfood single items list
    Route::get('/wine', [ProductsController::class, 'wine']); //render the sendfood wine items list
    Route::get('/beer', [ProductsController::class, 'beer']); //render the sendfood beer items list
    Route::get('/gin', [ProductsController::class, 'gin']); //render the sendfood gin items list
    Route::get('/water', [ProductsController::class, 'water']); //render the sendfood water items list
    Route::get('/hamperitems/{id}', [ProductsController::class, 'hamperItems']); //render the sendfood hamper items list
    Route::get('/hamperimages/{id}', [ProductsController::class, 'hamperImages']); //render the sendfood hamper images 
});
/** Send food package Products plugin **/


/** Send food package Products Purchase plugin **/
Route::group(['middleware' => ['web']], function () {
    Route::get('/cart', [PurchaseController::class, 'cart']); //render the sendfood cart items
    Route::post('/addtocart/{id}', [PurchaseController::class, 'addtocart'])->name('addtocart'); //add product to cart
    Route::get('/getcartproducts',[PurchaseController::class, 'getCartProducts'])->name('getcartproducts'); //cart products
    Route::post('/removecartproduct/{id}',[PurchaseController::class, 'removeCartProduct'])->name('removecartproduct'); //Remove cart products
    Route::post('/reducecartproduct/{id}',[PurchaseController::class, 'reduceProductByOne'])->name('reducecartproduct'); //Remove cart products
});

/** Send food package Products Purchase plugin **/

/** Beneficiaries **/
Route::get('/beneficiary', [BeneficiaryController::class, 'beneficiary'])->name('beneficiary'); //render the sendfood beneficiary Ui
Route::get('/countries', [BeneficiaryController::class, 'country'])->name('countries'); //fetch countries
Route::post('/addbeneficiary', [BeneficiaryController::class, 'create'])->name('addbeneficiary'); //Create a new beneficiary
/** Beneficiaries **/

/** Payment Methods **/
Route::get('/getbanklist', [ReceivingMethodsController::class, 'bankList'])->name('getbanklist'); //fetch bank lists
Route::get('/agentlist', [ReceivingMethodsController::class, 'agentList'])->name('agentlist'); //fetch agent lists
Route::post('/createreceivingmethod', [ReceivingMethodsController::class, 'beneficiaryReceivingMethod'])->name('createreceivingmethod'); //create beneficiary receiving method
/** Payment Methods **/