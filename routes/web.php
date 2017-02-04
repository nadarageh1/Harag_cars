<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => 'admin'], function () {
		
		// all for Users
	     Route::get('/Admins', 'AdminController@index');
		Route::post('/Admins', 'AdminController@postLogin');
		Route::get('/Admins/dashboard', 'AdminController@dashboard');
		Route::get('/Admins/AllUsers', 'UserController@showUsers');
		Route::get('/Admins/AddUser', 'UserController@addUser');
		Route::post('/Admins/AddUser', 'UserController@postAddUser');
		Route::get('/Admins/ShowUser/{id}', 'UserController@showUser');
		Route::get('/Admins/EditUser/{id}', 'UserController@editUser');
		Route::post('/Admins/EditUser/{id}', 'UserController@postEditUser');
		Route::get('/Admins/DeleteUser/{id}', 'UserController@deleteUser');
		// all for Adminss
		Route::get('/Admins/AllAdmins', 'AdminController@showAdmins');
		Route::get('/Admins/AddAdmin', 'AdminController@addAdmin');
		Route::post('/Admins/AddAdmin', 'AdminController@postAddAdmin');
		Route::get('/Admins/ShowAdmin/{id}', 'AdminController@showAdmin');
		Route::get('/Admins/EditAdmin/{id}', 'AdminController@editAdmin');
		Route::post('/Admins/EditAdmin/{id}', 'AdminController@postEditAdmin');
		Route::get('/Admins/DeleteAdmin/{id}', 'AdminController@deleteAdmin');
		Route::get('/Admins/LogoutAdmin', 'AdminController@logoutAdmin');
		// all for products
		Route::get('/Admins/AllProducts', 'ProductController@showProducts');
		Route::get('/Admins/AddProduct', 'ProductController@addProduct');
		Route::post('/Admins/AddProduct', 'ProductController@postAddProduct');
		Route::get('/Admins/ShowProduct/{id}', 'ProductController@showProduct');
		Route::get('/Admins/EditProduct/{id}', 'ProductController@editProduct');
		Route::post('/Admins/EditProduct/{id}', 'ProductController@postEditProduct');
		Route::get('/Admins/DeleteProduct/{id}', 'ProductController@deleteProduct');
	    // all for Marks
		Route::get('/Admins/AllMarks', 'MarkController@showMarks');
		Route::get('/Admins/AddMark', 'MarkController@addMark');
		Route::post('/Admins/AddMark', 'MarkController@postAddMark');
		Route::get('/Admins/ShowMark/{id}', 'MarkController@showMark');
		Route::get('/Admins/EditMark/{id}', 'MarkController@editMark');
		Route::post('/Admins/EditMark/{id}', 'MarkController@postEditMark');
		Route::get('/Admins/DeleteMark/{id}', 'MarkController@deleteMark');
		 // all for Models
		Route::get('/Admins/AllModels', 'ModelController@showModels');
		Route::get('/Admins/AddModel', 'ModelController@addModel');
		Route::post('/Admins/AddModel', 'ModelController@postAddModel');
		Route::get('/Admins/ShowModel/{id}', 'ModelController@showModel');
		Route::get('/Admins/EditModel/{id}', 'ModelController@editModel');
		Route::post('/Admins/EditModel/{id}', 'ModelController@postEditModel');
		Route::get('/Admins/DeleteModel/{id}', 'ModelController@deleteModel');
	
});

Route::group(['middleware' => 'web'], function () {
		
		Route::get('/Ecommerce', 'EcommerceController@index');
		Route::post('/Ecommerce/search','EcommerceController@postSearch'); 
		Route::post('/Ecommerce/register','EcommerceController@postRegister'); 
		Route::get('/Ecommerce/login','EcommerceController@login'); 
		Route::post('/Ecommerce/login','EcommerceController@postLogin');
		Route::get('/Ecommerce/profile','EcommerceController@profile'); 
		Route::get('/Ecommerce/ModelPage/{id}','EcommerceController@modelPage');
		Route::get('/Ecommerce/EditUser/{id}','EcommerceController@editUser');
		Route::post('/Ecommerce/EditUser/{id}','EcommerceController@postEditUser'); 
        
		// Route::post('/Users/profile','UserController@profile');
		// Route::resource('/Users', 'UserController');
		
		Route::get('/Ecommerce/LogoutUser','EcommerceController@logoutUser'); 
});