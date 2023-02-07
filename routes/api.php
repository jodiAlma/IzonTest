<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login',[\App\http\Controllers\AdminController::class,'token']);
Route::get('view_service_byCategory/{category?}',[\App\http\Controllers\Controller::class,'view_service_byCategory']);  
Route::get('view_category',[\App\http\Controllers\Controller::class,'view_category']);  



Route::group(['middleware' => 'auth:admins'], function () {

    Route::post('create_client',[\App\http\Controllers\AdminController::class,'create_client']);
    Route::post('update_client/{id?}',[\App\http\Controllers\AdminController::class,'update_client']);
    Route::delete('delete_client/{id?}',[\App\http\Controllers\AdminController::class,'delete_client']);
    Route::get('view_client/{id?}',[\App\http\Controllers\AdminController::class,'view_client']);  

    Route::post('create_priority',[\App\http\Controllers\AdminController::class,'create_priority']);
    Route::post('update_priority/{id?}',[\App\http\Controllers\AdminController::class,'update_priority']);
    Route::delete('delete_priority/{id?}',[\App\http\Controllers\AdminController::class,'delete_priority']); 
    Route::get('view_priority/{id?}',[\App\http\Controllers\AdminController::class,'view_priority']);  

    Route::post('create_Status',[\App\http\Controllers\AdminController::class,'create_Status']);
    Route::post('update_Status/{id?}',[\App\http\Controllers\AdminController::class,'update_Status']);
    Route::delete('delete_Status/{id?}',[\App\http\Controllers\AdminController::class,'delete_Status']);
    Route::get('view_Status/{id?}',[\App\http\Controllers\AdminController::class,'view_Status']);  

    Route::post('create_technicians',[\App\http\Controllers\AdminController::class,'create_technicians']);
    Route::post('update_technicians/{id?}',[\App\http\Controllers\AdminController::class,'update_technicians']);
    Route::delete('delete_technicians/{id?}',[\App\http\Controllers\AdminController::class,'delete_technicians']);
    Route::get('view_technicians/{id?}',[\App\http\Controllers\AdminController::class,'view_technicians']);  
 
    Route::post('create_category',[\App\http\Controllers\AdminController::class,'create_category']);
    Route::delete('delete_category/{id?}',[\App\http\Controllers\AdminController::class,'delete_category']);

    Route::post('create_service/{category?}',[\App\http\Controllers\AdminController::class,'create_service']);
    Route::post('update_service/{id?}/{category?}',[\App\http\Controllers\AdminController::class,'update_service']);
    Route::delete('delete_service/{id?}/{category?}',[\App\http\Controllers\AdminController::class,'delete_service']);
    Route::get('view_service/{service?}',[\App\http\Controllers\AdminController::class,'view_service']);  

    Route::post('create_ticket',[\App\http\Controllers\AdminController::class,'create_ticket']);
    Route::post('update_ticket/{ticket?}',[\App\http\Controllers\AdminController::class,'update_ticket']);
    Route::delete('delete_ticket/{id?}',[\App\http\Controllers\AdminController::class,'delete_ticket']);
    Route::get('view_ticket/{id?}',[\App\http\Controllers\AdminController::class,'view_ticket']);  

    Route::get('technicians_pagination',[\App\http\Controllers\AdminController::class,'technicians_pagination']);  
    Route::get('filter_ticket',[\App\http\Controllers\AdminController::class,'filter_ticket']);
    Route::post('complete_ticket/{ticket?}',[\App\http\Controllers\AdminController::class,'complete_ticket']);

    
  
});

Route::group(['middleware' => 'auth:users'], function () {
    
     Route::post('create_ticket_byClient',[\App\http\Controllers\ClientController::class,'create_ticket']);
     Route::post('evaluate_ticket/{evaluate?}/{ticket?}',[\App\http\Controllers\ClientController::class,'evaluate_ticket']);
    
   
});





