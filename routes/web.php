<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use App\Models\Company;

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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/add', 'add');
Route::post('submit', [EmployeeController::class, 'getEmployee']);



Route::get('submit-company', [EmployeeController::class, 'addCompany']);
Route::get('data', [EmployeeController::class, 'index']);


Route::view('addbook', 'addbook');
Route::view('addstudent', 'addstudent');
Route::get('issuebook', 'MyController@selectBook');

Route::post('submit-book', 'MyController@booksubmit');       // to use this route method, go to app>Providers>RouteServiceProvider.php file
Route::post('submit-std', 'MyController@studentsubmit');     // and uncomment `` protected $namespace = 'App\\Http\\Controllers'; `` line

Route::post('submit-issue', 'MyController@issuesubmit');

Route::get('listissue', 'MyController@issuelist');
