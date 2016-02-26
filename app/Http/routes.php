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
	Route::get('/electronics','AdminController@electronics');
	Route::get('/toys','AdminController@toys');
	Route::get('/glasses','AdminController@glasses');
	Route::get('/pants','AdminController@pants');
	Route::get('/bags','AdminController@bags');
	Route::get('/sourceeaasy','AdminController@sourceeaasy');
	Route::get('/tripod','AdminController@tripod');
	Route::get('/mickey','AdminController@mickey');
	Route::get('/electronics1','AdminController@electronics1');
	Route::get('/toys1','AdminController@toys1');
	Route::get('/glasses1','AdminController@glasses1');
	Route::get('/pants1','AdminController@pants1');
	Route::get('/bags1','AdminController@bags1');
	// createProdct
});