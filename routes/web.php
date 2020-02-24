<?php

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

Route::get('/', 'frontController@index');

Route::get('/Learnmore','frontController@learnmore');

Route::get('/Learnmore/Missionvision','frontController@missionvision');

Route::get('/Learnmore/Missionvision/Corporateprofile', 'frontController@corporate');

Route::get('/contact','frontController@contacts');

Route::get('/demo','frontController@demos');










//Route Admin Dashboard//





Route::get('/admin','adminController@admin');

Route::get('admin/setup', 'adminController@setups');

Route::get('admin/categories', 'adminController@categories');

Route::get('prodcats','adminController@prodcats');

//edit//delete/update//
Route::get('editPost/{id}','adminController@editPost');

Route::get('deletePost/{id}','adminController@deletePost');

Route::get('editService/{id}','adminController@editService');

Route::get('deleteService/{id}','adminController@deleteService');

Route::get('deleteCategory/{id}','adminController@deleteCategory');

Route::get('editCategory/{id}','adminController@editCategory');

Route::get('editproduct/{id}','adminController@editProduct');

Route::get('delproduct/{id}','adminController@delProduct');

//New//
Route::get('new-post','adminController@newPost');

Route::get('new-service','adminController@newService');

Route::get('new-product','adminController@product');

Route::get('new-members','adminController@newMember');

Route::get('button-link','adminController@buttons');

//adding and posts//
Route::post('addPost', 'crudController@insertdata');

Route::post('addService', 'crudController@insertdata');

Route::post('addProduct','crudController@insertData');

Route::post('addProd','crudController@insertData');

Route::post('addButtons','crudController@insertData');

Route::post('addMember','crudController@insertData');

Route::post('addSettings', 'crudController@insertData');

Route::post('updateCategory/{id}', 'crudController@updateData');

Route::post('addCategory', 'crudController@insertData');

Route::post('updatePost/{id}','crudController@updateData');

Route::post('updateProduct/{id}','crudController@updateData');



//all posts//
Route::get('all-posts','adminController@allPosts');

Route::get('all-service','adminController@allServices');

Route::get('all-services','adminController@allservices');

Route::get('all-product','adminController@allproduct');

Route::get('all-members', 'adminController@allmembers');

Route::get('all-modals','adminController@allmodals');

// you missed it. You must have send the url request to the controller first. :-) Okay! you can carry on from there. :-)