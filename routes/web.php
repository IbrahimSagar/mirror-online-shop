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
/*
Route::get('/', function () {
    return view('welcome');
}); 
*/
/*
|--------------------------------------------------------------------------
| For getting error for object based array
|--------------------------------------------------------------------------
*/
if (version_compare(PHP_VERSION, '7.2.0', '>=')) {

    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::get('/', 'PagesController@index')->name('index');
Route::get('/contact', 'PagesController@contact')->name('contact');
/*
|--------------------------------------------------------------------------
| product Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => '/products'], function (){
  
Route::get('/products','ProductsController@products')->name('products');
Route::get('/product/{slug}','ProductsController@show')->name('products.show');
Route::get('/search','PagesController@search')->name('search');
});

/*
|--------------------------------------------------------------------------
| About Us
|--------------------------------------------------------------------------
*/

Route::get('/about','AboutPageController@index')->name('about.index');

//User Routes
Route::group(['prefix' => '/user'], function (){
  
	Route::get('/token/{token}','Auth\VerificationController@verify')->name('user.verification');
	Route::get('/dashboard', 'UsersController@dashboard')->name('user.dashboard');
	Route::get('/profile', 'UsersController@profile')->name('user.profile');
	Route::post('/profile/update', 'UsersController@profileUpdate')->name('user.profile.update');
});


//cart Routes
Route::group(['prefix' => '/carts'], function (){

	Route::get('/', 'CartsController@index')->name('carts');
	Route::post('/store','CartsController@store')->name('carts.store');
	Route::post('/update/{id}','CartsController@update')->name('carts.update');
	Route::post('/delete/{id}','CartsController@destroy')->name('carts.delete');
});
//checkout Routes
Route::group(['prefix' => '/checkout'], function (){

	Route::get('/', 'CheckoutsController@index')->name('checkouts');
	Route::post('/store','CheckoutsController@store')->name('checkouts.store');
});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin'], function (){
   Route::get('/','AdminPagesController@index')->name('admin.index');

   //Admin Login 
   Route::get('/login','Auth\Admin\LoginController@showLoginForm')->name('admin.login');
   Route::post('/login/submit','Auth\Admin\LoginController@login')->name('admin.login.submit');
   Route::post('/logout/submit','Auth\Admin\LoginController@logout')->name('admin.logout.submit');
   //Pass Email send
   Route::get('/password/reset','Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
   Route::post('/password/resetPost','Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');//Pass reset
   Route::get('/password/reset/{token}','Auth\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
   Route::post('/password/reset','Auth\Admin\ResetPasswordController@reset')->name('admin.password.reset.post');
 

/*
|--------------------------------------------------------------------------
| Product Routes
|--------------------------------------------------------------------------
*/ 

Route::group(['prefix' => '/products'], function (){

	Route::get('/','AdminProductController@index')->name('admin.products');
	Route::get('/create','AdminProductController@create')->name('admin.product.create');
	Route::get('/edit/{id}','AdminProductController@edit')->name('admin.product.edit');

	Route::post('/store','AdminProductController@store')->name('admin.product.store');

	Route::post('/product/edit/{id}','AdminProductController@update')->name('admin.product.update');
	Route::get('/product/delete/{id}','AdminProductController@delete')->name('admin.product.delete');
});

/*
|--------------------------------------------------------------------------
| Orders Routes
|--------------------------------------------------------------------------
*/ 
Route::group(['prefix' => '/orders'], function (){

	Route::get('/','AdminOrdersController@index')->name('admin.orders');
	Route::get('/view/{id}','AdminOrdersController@show')->name('admin.order.show');
	Route::post('/delete/{id}','AdminOrdersController@delete')->name('admin.order.delete');
	Route::post('/completed/{id}','AdminOrdersController@completed')->name('admin.order.completed');
	Route::post('/paid/{id}','AdminOrdersController@paid')->name('admin.order.paid');
});

/*
|--------------------------------------------------------------------------
| Category Routes
|--------------------------------------------------------------------------
*/ 
Route::group(['prefix' => '/categories'], function (){

	Route::get('/','CategoriesController@index')->name('admin.categories');
	Route::get('/create','CategoriesController@create')->name('admin.category.create');
	Route::get('/edit/{id}','CategoriesController@edit')->name('admin.category.edit');

	Route::post('/store','CategoriesController@store')->name('admin.category.store');

	Route::post('/category/edit/{id}','CategoriesController@update')->name('admin.category.update');
	Route::get('/category/delete/{id}','CategoriesController@delete')->name('admin.category.delete');
});


/*
|--------------------------------------------------------------------------
| Brand Routes
|--------------------------------------------------------------------------
*/ 
  Route::group(['prefix' => '/brands'], function(){
    Route::get('/', 'AdminBrandsController@index')->name('admin.brands');
    Route::get('/create', 'AdminBrandsController@create')->name('admin.brand.create');
    Route::get('/edit/{id}', 'AdminBrandsController@edit')->name('admin.brand.edit');

    Route::post('/store', 'AdminBrandsController@store')->name('admin.brand.store');

    Route::post('/brand/edit/{id}', 'AdminBrandsController@update')->name('admin.brand.update');
    Route::post('/brand/delete/{id}', 'AdminBrandsController@delete')->name('admin.brand.delete');
  });
/*
|--------------------------------------------------------------------------
| Division Routes
|--------------------------------------------------------------------------
*/ 
Route::group(['prefix' => '/divisions'], function (){

	Route::get('/','DivisionsController@index')->name('admin.divisions');
	Route::get('/create','DivisionsController@create')->name('admin.division.create');
	Route::get('/edit/{id}','DivisionsController@edit')->name('admin.division.edit');

	Route::post('/store','DivisionsController@store')->name('admin.division.store');

	Route::post('/division/edit/{id}','DivisionsController@update')->name('admin.division.update');
	Route::get('/division/delete/{id}','DivisionsController@delete')->name('admin.division.delete');
});

/*
|--------------------------------------------------------------------------
| District Routes
|--------------------------------------------------------------------------
*/ 
Route::group(['prefix' => '/districts'], function (){

	Route::get('/','DistrictsController@index')->name('admin.districts');
	Route::get('/create','DistrictsController@create')->name('admin.district.create');
	Route::get('/edit/{id}','DistrictsController@edit')->name('admin.district.edit');

	Route::post('/store','DistrictsController@store')->name('admin.district.store');

	Route::post('/district/edit/{id}','DistrictsController@update')->name('admin.district.update');
	Route::get('/district/delete/{id}','DistrictsController@delete')->name('admin.district.delete');
});

/*
|--------------------------------------------------------------------------
| Slider Routes
|--------------------------------------------------------------------------
*/ 
Route::group(['prefix' => '/sliders'], function (){

	Route::get('/','SlidersController@index')->name('admin.sliders');
	Route::get('/create','SlidersController@create')->name('admin.slider.create');
	Route::post('/store','SlidersController@store')->name('admin.slider.store');
	Route::post('/slider/edit/{id}','SlidersController@update')->name('admin.slider.update');
	Route::post('/slider/delete/{id}','SlidersController@delete')->name('admin.slider.delete');
});
Route::get('/contact', 'PagesController@contact')->name('contact');

});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Api Route
Route::get('get-districts/{id}',function($id){
	return json_encode(App\District::where('division_id',$id)->get());

});