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

//Route::get('/', function () {
//    return view('master');
//});
Route::get('/','WelcomeController@index');
Route::get('/contact','WelcomeController@contact_us');
Route::get('/adda','AdminController@index');
Route::post('/admin-login-check','AdminController@admin_login_check');
Route::get('/category-news/{id}','WelcomeController@category_news');
/*
 * Start Admin Panel
 */
Route::get('/dashboard','SuperAdminController@index');
Route::get('/logout','SuperAdminController@logout');
Route::get('/add-category','SuperAdminController@category_form');
Route::post('/save-category','SuperAdminController@save_category');
Route::get('/manage-category','SuperAdminController@manage_category');
Route::get('/published-category/{id}','SuperAdminController@published_category');
Route::get('/unpublished-category/{id}','SuperAdminController@unpublished_category');
Route::get('/delete-category/{id}','SuperAdminController@delete_category');
Route::get('/edit-category/{id}','SuperAdminController@edit_category');
Route::post('/update-category/','SuperAdminController@update_category');
Route::get('/add-news','SuperAdminController@add_news');
Route::post('/save-news','SuperAdminController@save_news');
Route::get('/manage-news/','SuperAdminController@manage_news');
Route::get('/published-news/{id}','SuperAdminController@published_news');
Route::get('/unpublished-news/{id}','SuperAdminController@unpublished_news');
Route::get('/edit-news/{id}','SuperAdminController@edit_news');
Route::post('/update-news/','SuperAdminController@update_news');
Route::get('/delete-news/{id}','SuperAdminController@delete_news');