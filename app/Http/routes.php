<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Comment (add, delete, show)
Route::post('food-details/{id}', 'CommentController@add_comment');
Route::get('food-admin/manage-comment', 'CommentController@getListCmt');
Route::get('food-admin/{id}/delete-comment', 'CommentController@delete_comment');

//Booking (table, event)

Route::post('/table', 'FoodController@book_table');


// Shopping cart

Route::get('/cart', 'FoodController@cart');

Route::post('/cart', 'FoodController@cart');

Route::get('/checkout', 'FoodController@checkout');

Route::post('/checkout', 'FoodController@postCheckout');

Route::post('/user-profile', 'FoodController@getProfile');

Route::get('bill-details/{id}', 'FoodController@getBillDetails');

//======================== end cart

// Bill (detail, del)
Route::get('food-admin/{id}/delete-bill', 'BillAdminController@delete_bill');
Route::get('food-admin/manage-bills/{id}/bill-detail', 'BillAdminController@getAllBillDetails');
//End Bill (edit, del)

//======================================

// Booking (confirm, del)
Route::get('food-admin/{id}/delete-booking', 'FoodAdminController@delete_booking');
Route::get('user-profile/{id}/cancel-booking', 'FoodController@cancel_booking');
Route::get('food-admin/manage-booking', 'FoodAdminController@getBooking');
//End Booking

//======================================

// User (edit, del)
Route::get('food-admin/{id}/edit-user', 'UsersAdminController@edit_user');

Route::post('food-admin/{id}/update-user', 'UsersAdminController@update_user');

Route::get('food-admin/{id}/delete-user', 'UsersAdminController@delete_user');
//End User (edit, del)

//======================================

// Category (Add, edit, del)
Route::get('food-admin/create-category','FoodAdminController@add_category');

Route::post('food-admin/add-category','FoodAdminController@add_category');

Route::get('food-admin/{id}/delete-category', 'FoodAdminController@delete_category');

Route::get('food-admin/{id}/edit-category', 'FoodAdminController@edit_category');

Route::post('food-admin/update-category', 'FoodAdminController@update_category');


//End Category (Add, edit, del)

//======================================

//Food (Add, edit, del)

Route::get('food-admin/{id}/edit-food', 'FoodAdminController@edit_food');

Route::post('food-admin/update-food', 'FoodAdminController@update_food');

Route::get('food-admin/{id}/delete-food', 'FoodAdminController@delete_food');

Route::get('food-admin/add-food','FoodAdminController@create_food');

Route::post('food-admin/add-food','FoodAdminController@add_food');

//End food(Add, edit, del)

Route::get('food-admin/admin-search', 'FoodAdminController@search');

Route::get('/home', 'FoodController@index');

Route::get('/{id?}', 'FoodController@index');


Route::get('/food-details/{id}', ['as' => 'food-details', 'uses' => 'FoodController@details']); 

Route::get('/details-cate/{id}', 'FoodController@details_cate');

Route::get('/food-admin/{id?}', 'FoodAdminController@index');

Route::get('/search', 'FoodController@search');

Route::controllers([
	'auth' => 'Auth\AuthController',	
	'password' => 'Auth\PasswordController',
]);

