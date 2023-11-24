<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

//Route::get('/',  [\App\Http\Controllers\FrontEndController::class,'index'] )->name('index');
//Route::get('/pt',  [\App\Http\Controllers\FrontEndController::class,'template'] )->name('pt');
Route::get('/',  [\App\Http\Controllers\FrontEndController::class,'new_Index'] )->name('ft');
Route::get('/listings', [\App\Http\Controllers\FrontEndController::class,'listings'] )->name('listings');

Route::get('/listing/{id}', [\App\Http\Controllers\FrontEndController::class, 'listing'])->name('single.listing');
Route::get('/dashboard', [\App\Http\Controllers\FrontEndController::class, 'dashboard'])->name('dashboard');
Route::get('/about', [\App\Http\Controllers\FrontEndController::class, 'about'])->name('about');
Route::get('/query', [\App\Http\Controllers\searchController::class, 'search'])->name('search');
Route::get('/search', [\App\Http\Controllers\searchController::class, 'result'])->name('result');
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store'])->name('send-message');


Route::post('/contact',function (\Illuminate\Http\Request $request){
   return json_encode($request->all());
})->name('contact');

Route::post('contactcontact-form-7/v1/contact-forms/5/feedback',[\App\Http\Controllers\ContactController::class,'inquery']);
Route::post('contactcontact-form-7/v1/contact-forms/16/feedback',[\App\Http\Controllers\ContactController::class, 'news_letter']);

Route::get('contactcontact-form-7/v1/contact-forms/5/refill',function (\Illuminate\Http\Request $request){
    return '[]';
});
Route::get('contactcontact-form-7/v1/contact-forms/16/refill',function (\Illuminate\Http\Request $request){
    return '[]';
});
Route::middleware(['isauthorize:1'])->prefix('back')->group(function () {
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::resource('listings', \App\Http\Controllers\ListingController::class);
    Route::post('listings/upload',[ \App\Http\Controllers\ListingController::class,'upload'])->name('listingupload');
    Route::post('listings/getupload',[ \App\Http\Controllers\ListingController::class,'getUpload'])->name('get_upload');
    Route::post('listings/record',[ \App\Http\Controllers\ListingController::class,'new_store'])->name('listingrecord');
    Route::resource('realtors', \App\Http\Controllers\RealtorController::class);
    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::resource('som', \App\Http\Controllers\SellerOftheMonth::class);
    Route::resource('inquiries', \App\Http\Controllers\InquiryController::class);
});


//Route::get('/listing/{id}', 'FrontEndController@listing' )->name('single.listing');
//Route::get('/dashboard', 'FrontEndController@dashboard' )->name('dashboard');
//Route::get('/about', 'FrontEndController@about' )->name('about');
//Route::get('/query', 'searchController@search' )->name('search');
//Route::get('/search', 'searchController@result' )->name('result');
//Route::post('/contact', 'ContactController@store' )->name('send-message');
//
//
//
//
//// 'middleware' => 'auth'
//// ['middleware'=>'auth']
//// isauthorize:0 -> 0 == admin
//Route::group(['prefix' => 'back','middleware' => 'isauthorize:0'], function() {
//
//    Route::get('/', 'AdminController@index' )->name('admin.index');
//    Route::resource('listings', 'ListingController');
//    Route::resource('realtors', 'RealtorController');
//    Route::resource('users', 'UserController');
//    Route::resource('som', 'SellerOftheMonth');
//    Route::resource('inquiries', 'InquiryController');
//
//});



// Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
// Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
// Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

// Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');



/*Auth::routes();*/

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
