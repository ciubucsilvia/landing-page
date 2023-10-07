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
// *****************   Laravel 5.4  *************
Route::middleware(['web'])->group(function(){
	Route::match(['get', 'post'], '/', 'IndexController@execute')->name('home');
	
	Route::get('/page/{alias}', 'PageController@execute')->name('page');
	
	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');
});

Route::prefix('admin')->middleware(['auth'])->group(function(){
	// admin
	Route::get('/', function(){
		if(view()->exists('admin.index')){
			$data = ['title' => 'Panel de administrare'];

			return view('admin.index', $data);
		}
	});

	// admin/pages
	Route::prefix('pages')->group(function(){
		Route::get('/', 'PagesController@execute')->name('pages');
		// admin/pages/add
		Route::match(['get', 'post'], '/add', 'PageAddController@execute')->name('pageAdd');
		// admin/pages/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{page}', 'PageEditController@execute')->name('pageEdit');
	});

	Route::prefix('portfolios')->group(function(){
		Route::get('/', 'PortfolioController@execute')->name('portfolios');

		Route::match(['get', 'post'], '/add', 'PortfolioAddController@execute')->name('portfolioAdd');

		Route::match(['get', 'post', 'delete'], '/edit/{portfolio}', 'PortfolioEditController@execute')->name('portfolioEdit');		
	});

	Route::prefix('services')->group(function(){
		Route::get('/', 'ServiceController@execute')->name('services');
		
		Route::match(['get', 'post'], '/add', 'ServiceAddController@execute')->name('serviceAdd');
		
		Route::match(['get', 'post', 'delete'], '/edit/{service}', 'ServiceEditController@execute')->name('serviceEdit');
	});

	Route::prefix('peoples')->group(function(){
		Route::get('/', 'PeopleController@execute')->name('peoples');
		
		Route::match(['get', 'post'], '/add', 'PeopleAddController@execute')->name('peopleAdd');
		
		Route::match(['get', 'post', 'delete'], '/edit/{people}', 'PeopleEditController@execute')->name('peopleEdit');
	});

	Route::prefix('clients')->group(function(){
		Route::get('/', 'ClientController@execute')->name('clients');
		
		Route::match(['get', 'post'], '/add', 'ClientAddController@execute')->name('clientAdd');
		
		Route::match(['get', 'post', 'delete'], '/edit/{client}', 'ClientEditController@execute')->name('clientEdit');
	});
});




// // *****************   Laravel 5.2  *************
// Route::group(['middleware' => 'web'], function(){
// 	Route::match(['get', 'post'], '/', ['uses' => 'IndexController@execute', 'as' => 'home']);
// 	Route::get('/page/{alias}', ['uses' => 'PageController@execute', 'as' => 'page']);
// 	Auth::routes();
// });

// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
// 	// admin
// 	Route::get('/', function(){

// 	});

// 	// admin/pages
// 	Route::group(['prefix' => 'pages'], function(){
// 		Route::get('/', ['uses' => 'PagesController@execute', 'as' => 'pages']);
// 		// admin/pages/add
// 		Route::match(['get', 'post'], '/add', ['uses' => 'PagesAddController@execute', 'as' => 'pagesAdd']);
// 		// admin/pages/edit/2
// 		Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses' => 'PagesEditController@execute', 'as' => 'pagesEdit']);
// 	});

// 	Route::group(['prefix' => 'portfolios'], function(){
// 		Route::get('/', ['uses' => 'PortfolioController@execute', 'as' => 'portfolios']);

// 		Route::match(['get', 'post'], '/add', ['uses' => 'PortfolioAddController@execute', 'as' => 'portfolioAdd']);

// 		Route::match(['get', 'post', 'delete'], '/edit/{portfolio}', ['uses' => 'PortfolioEditController@execute', 'as' => 'portfolioEdit']);
// 	});

// 	Route::group(['prefix' => 'services'], function(){
// 		Route::get('/', ['uses' => 'ServiceController@execute', 'as' => 'services']);
		
// 		Route::match(['get', 'post'], '/add', ['uses' => 'ServiceAddController@execute', 'as' => 'serviceAdd']);
		
// 		Route::match(['get', 'post', 'delete'], '/edit/{service}', ['uses' => 'ServiceEditController@execute', 'as' => 'serviceEdit']);
// 	});

// 	Route::group(['prefix' => 'peoples'], function(){
// 		Route::get('/', ['uses' => 'PeopleController@execute', 'as' => 'peoples']);
		
// 		Route::match(['get', 'post'], '/add', ['uses' => 'PeopleAddController@execute', 'as' => 'peopleAdd']);
		
// 		Route::match(['get', 'post', 'delete'], '/edit/{people}', ['uses' => 'PeopleEditController@execute', 'as' => 'peopleEdit']);
// 	});
// });



