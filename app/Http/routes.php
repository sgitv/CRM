<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


		// $email = $_POST['email'];
		// echo $email;

	// });

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', function () {
    return view('welcome');
});
    Route::get('/home', 'HomeController@index');
	Route::get('admin',function(){
		echo "hi";
	})->middleware('isAdmin');
	Route::get('/customer','AdminController@customer');
	Route::get('/products','AdminController@products');
	Route::get('/edit/{id}', 'AdminController@edit');	
	Route::get('/pro/{id}', 'AdminController@pro');
	Route::post('/update/{id}', 'AdminController@back');
	Route::post('/create', 'AdminController@create');
	Route::get('/delete/{id}', 'AdminController@delete');
	Route::post('/createProdct', 'AdminController@createProdct');
	Route::get('/editProduct/{id}', 'AdminController@editProduct');
	Route::post('/updateProduct/{id}', 'AdminController@updateProduct');
	Route::get('/deleteProduct/{id}', 'AdminController@deleteProduct');
	Route::post('/createProdctForCustomer', 'AdminController@createProdctForCustomer');
	Route::get('/category/{id}','AdminController@category');
	Route::get('/company/{id}','AdminController@company');
	Route::get('/products1/{id}','AdminController@products1');
});