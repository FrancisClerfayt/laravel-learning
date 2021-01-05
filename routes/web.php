<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/products', 'ProductController@index')->name('products');
Route::get('/product/{id}', 'ProductController@show')->name('showProduct');
Route::get('/editProduct/{id}', 'ProductController@edit')->name('editProduct');
Route::post('/updateProduct/{id}', 'ProductController@update')->name('updateProduct');

Route::get('/employees', 'EmployeeController@index')->name('employees');
Route::get('/employee/{id}', 'EmployeeController@show')->name('showEmployee');
Route::get('/editEmployee/{id}', 'EmployeeController@edit')->name('editEmployee');
Route::post('/updateEmployee/{id}', 'EmployeeController@update')->name('updateEmployee');

Route::get('/companies', 'CompanyController@index')->name('companies');
Route::get('/company/{id}', 'CompanyController@show')->name('showCompany');
Route::get('/editCompany/{id}', 'CompanyController@edit')->name('editCompany');
Route::post('/updateCompany/{id}', 'CompanyController@update')->name('updateCompany');

Route::resource('test', 'TestController');