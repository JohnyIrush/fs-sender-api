<?php

use Cchivhima\Sendfood\Http\Controllers\SendFoodUiController; //Import Send Food UI controller -> this controller controls all aspects of UI
use Cchivhima\Sendfood\Http\Controllers\ProductsController; //Import Send Food Products Controller -> this controller controls all aspects of Products
use Cchivhima\Sendfood\Http\Controllers\PurchaseController; //Import Send Food Products Purchase Controller -> this controller controls all aspects of Products purchase
use Cchivhima\Sendfood\Http\Controllers\BeneficiaryController; //Import Send Food Beneficiaries Controller -> this controller controls all aspects of Beneficiaries
use Cchivhima\Sendfood\Http\Controllers\ReceivingMethodsController; //Import Send Food payment methods Controller -> this controller controls all aspects of Payment Methods 
use Cchivhima\Sendfood\Http\Controllers\PaymentController; //Controls all Aspects of Payments
use Cchivhima\Sendfood\Http\Controllers\StripePaymentController; //Handles Payment with stripe
use Cchivhima\Sendfood\Http\Controllers\ZipWalletPaymentController; //Handles Payment with zipwallet
use Cchivhima\Sendfood\Http\Controllers\InteracOnlinePaymentController; //Handles Payment with Interac Online
/** Send food package UI **/
Route::get('sendfooddashboard', [SendFoodUiController::class, 'dashboard'])->name('sendfooddashboard'); //render the sendfood dashboard
/** Send food package UI **/

/** Send food package Products plugin **/
Route::group(['middleware' => ['web']], function () {
    Route::get('hampers', [ProductsController::class, 'hampers'])->name('hampers'); //render the sendfood hamper list
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
    Route::get('cart', [PurchaseController::class, 'cart'])->name('cart'); //render the sendfood cart items
    Route::post('/addtocart/{id}', [PurchaseController::class, 'addtocart'])->name('addtocart'); //add product to cart
    Route::get('/getcartproducts',[PurchaseController::class, 'getCartProducts'])->name('getcartproducts'); //cart products
    Route::post('/removecartproduct/{id}',[PurchaseController::class, 'removeCartProduct'])->name('removecartproduct'); //Remove cart products
    Route::post('/reducecartproduct/{id}',[PurchaseController::class, 'reduceProductByOne'])->name('reducecartproduct'); //Remove cart products
});

/** Send food package Products Purchase plugin **/

/** Beneficiaries **/
Route::group(['middleware' => ['web']], function () {
Route::get('/beneficiary', [BeneficiaryController::class, 'beneficiary'])->name('beneficiary'); //render the sendfood beneficiary Ui
Route::get('beneficiaries', [BeneficiaryController::class, 'fetchBeneficiary'])->name('beneficiaries'); //render the sendfood beneficiaries Ui
Route::get('/countries', [BeneficiaryController::class, 'country'])->name('countries'); //fetch countries
Route::post('/addbeneficiary', [BeneficiaryController::class, 'create'])->name('addbeneficiary'); //Create a new beneficiary
Route::get('/states', [BeneficiaryController::class, 'state'])->name('states'); //fetch states
Route::get('/cities', [BeneficiaryController::class, 'city'])->name('cities'); //fetch cities
Route::get('/phonecodes', [BeneficiaryController::class, 'phoneCode'])->name('phonecodes'); //fetch phonecodes
Route::get('/phonecodes', [BeneficiaryController::class, 'phoneCode'])->name('phonecodes'); //fetch phonecodes
Route::post('selectedbeneficiary', [BeneficiaryController::class, 'selectBeneficiary'])->name('selectedbeneficiary'); //fetch selectedbeneficiary
});
/** Beneficiaries **/

/** Receiving Methods **/
Route::group(['middleware' => ['web']], function () {
Route::get('/getbanklist', [ReceivingMethodsController::class, 'bankList'])->name('getbanklist'); //fetch bank lists
Route::get('/agentlist', [ReceivingMethodsController::class, 'agentList'])->name('agentlist'); //fetch agent lists
Route::get('/agentlocation/{id}', [ReceivingMethodsController::class, 'agentLocation'])->name('agentlocation'); //fetch agent location
Route::get('/agentmobile/{id}', [ReceivingMethodsController::class, 'agentMobile'])->name('agentmobile'); //fetch agent location
Route::post('/createreceivingmethod', [ReceivingMethodsController::class, 'beneficiaryReceivingMethod'])->name('createreceivingmethod'); //create beneficiary receiving method
Route::get('/mobilewallettemplates', [ReceivingMethodsController::class, 'mobileWalletTemplate'])->name('mobilewallettemplates'); //fetch mobile wallet templates
Route::get('/cashpickuptemplates', [ReceivingMethodsController::class, 'cashPickUpTemplates'])->name('cashpickuptemplates'); //fetch cash pick templates
Route::get('/zipwallets', [ReceivingMethodsController::class, 'zipWallet'])->name('zipwallets'); //fetch zip wallets
Route::post('createreceivingmethod', [ReceivingMethodsController::class, 'createReceivingMethod'])->name('createreceivingmethod'); //create receiving Method
});
/** Receiving Methods **/

/** Payment  **/
Route::group(['middleware' => ['web']], function () {
Route::get('/reviewtransfer', [PaymentController::class, 'reviewTransfer'])->name('reviewtransfer'); //fetch review transfer details
Route::get('/revieworder', [PaymentController::class, 'reviewOrder'])->name('revieworder'); //fetch review transfer details selectedmethod
Route::post('selectpaymentmethod', [PaymentController::class, 'selectedPaymentMethod'])->name('selectpaymentmethod'); //set selected payment method
});
/** Payment  **/

/**Payment Gateways Intergration **/
Route::group(['middleware' => ['web']], function () {
    //stripe
    Route::get('paywithstripe', [StripePaymentController::class, 'payWithStripe'])->name('paywithstripe'); //Render Stripe Payment Front-end
    Route::post('stripe', [StripePaymentController::class, 'makeStripePayment'])->name('stripe'); //execute Stripe Payment
    Route::get('stripebillingportal', [StripePaymentController::class, 'stripeBillingPortal'])->name('stripebillingportal'); //Redirect Stripe Buyers to Stripe Billing Portal.

    Route::get('paywithzipwallet', [ZipWalletPaymentController::class, 'payWithZipWallet'])->name('paywithzipwallet'); //Render zipwallet Payment Front-end
    Route::post('zipwallet', [ZipWalletPaymentController::class, 'makeZipWalletPayment'])->name('zipwallet'); //Zipwallet Payment
    
    //interact onlien
    Route::get('paywithinteraconline', [InteracOnlinePaymentController::class, 'payWithInteracOnline'])->name('paywithinteraconline'); //Render interac online Payment Front-end
    Route::post('interaconline', [InteracOnlinePaymentController::class, 'makeInteracOnlinePayment'])->name('interaconline'); //Interac Online Payment
    Route::post('interaconline', [InteracOnlinePaymentController::class, 'makeInteracOnlinePayment'])->name('interaconline'); //Interac Online Payment
    Route::post('/TheatreManager/payment/moneris/approved', [InteracOnlinePaymentController::class, 'interacOnlineApproved'])->name('interaconlineapproved'); //Interac Online approved ressponse
    Route::post('/TheatreManager/payment/moneris/declined', [InteracOnlinePaymentController::class, 'interacOnlineDeclined'])->name('interaconlinedeclined'); //Interac Online declined ressponse
    Route::post('/TheatreManager/payment/moneris/canceled', [InteracOnlinePaymentController::class, 'interacOnlineCanceled'])->name('interaconlinedeclined'); //Interac Online transaction canceled ressponse
    Route::post('/TheatreManager/payment/moneris/verification', [InteracOnlinePaymentController::class, 'interacOnlineVerification'])->name('interaconlineverification'); //Interac Online verification ressponse
    });
/**Payment Gateways Intergration **/