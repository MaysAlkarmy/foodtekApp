<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('Users', UserController::class);
Route::get('/',[AuthController::class,'index']);
Route::post('/register',[AuthController::class,'register']);
Route::post('/forgotpassword',[AuthController::class,'forGotPassword']);
Route::post('/login',[AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::post("/logout", [AuthController::class, 'logout']);
});
Route::post('/getItemsByCategory', [MenuController::class, 'getItemsByCategory'])->name('getItemsByCategory');
Route::get('/topRated', [MenuController::class, 'topRated'])->name('topRated');
Route::get('/getMainCategory', [MenuController::class, 'getMainCategory'])->name('getMainCategory');
Route::post('/getItemById', [MenuController::class, 'getItemById'])->name('getItemById');
Route::get('/recommendedItems', [MenuController::class, 'recommendedItems'])->name('recommendedItems');

Route::post('/createItem', [MenuController::class, 'createItem'])->name('createItem');


Route::post('/addToFavourites', [FavoriteController::class, 'addToFavourites'])->name('addToFavourites');
Route::post('/getUserFavourite', [FavoriteController::class, 'getUserFavourite'])->name('getUserFavourite');
Route::post('/deleteUserFavourite', [FavoriteController::class, 'deleteUserFavourite'])->name('deleteUserFavourite');

Route::get('/bannerImage', [BannerController::class, 'bannerImage'])->name('bannerImage');

Route::post('/createReview', [ReviewController::class, 'createReview'])->name('createReview');

Route::post('/createOffer', [OfferController::class, 'createOffer'])->name('createOffer');
Route::post('/updateOffer{id}', [OfferController::class, 'updateOffer'])->name('updateOffer');



// Route::get('/', function () {
//     return view('test');
// });