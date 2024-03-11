<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\orgcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::any('/',[orgcontroller::class,'index']);
Route::any('/register',[orgcontroller::class,'register']);
Route::get('/org_dashbord',[orgcontroller::class,'org_dashbord']);
Route::get('/org',[orgcontroller::class,'org']);
Route::get('/org_profile',[orgcontroller::class,'org_profile']);
Route::any('/add_event',[orgcontroller::class,'add_event']);
Route::get('/view_event',[orgcontroller::class,'view_event']);
Route::any('/payment',[orgcontroller::class,'payment']);
Route::get('/payment_details',[orgcontroller::class,'payment_details']);
Route::any('/expence',[orgcontroller::class,'expence']);
Route::get('/expence_details',[orgcontroller::class,'expence_details']);
Route::get('/review',[orgcontroller::class,'review']);
Route::get('/staff_org',[orgcontroller::class,'staff_org']);
Route::any('/staff_register',[orgcontroller::class,'staff_register']);
Route::any('/staff_login',[orgcontroller::class,'staff_login']);
Route::any('/staff_profile',[orgcontroller::class,'staff_profile']);
Route::any('/staff_header',[orgcontroller::class,'staff_header']);
Route::get('/speaker_about',[orgcontroller::class,'speaker_about']);
Route::any('/Add_Speacker',[orgcontroller::class,'Add_Speacker']);
Route::any('/add_team_org',[orgcontroller::class,'add_team_org']);
Route::get('/org_team_about',[orgcontroller::class,'org_team_about']);


//delete
Route::get('/delete_event/{id}',[orgcontroller::class,'delete_event']);
Route::get('/delete_speaker/{id}',[orgcontroller::class,'delete_speaker']);
Route::get('/delete_org_team/{id}',[orgcontroller::class,'delete_org_team']);
Route::get('/delete_payment/{id}',[orgcontroller::class,'delete_payment']);
Route::get('/delete_expence/{id}',[orgcontroller::class,'delete_expence']);


//update
Route::any('/update_event/{id}',[orgcontroller::class,'update_event']);
Route::any('/update_speaker/{id}',[orgcontroller::class,'update_speaker']);
Route::any('/update_org_team/{id}',[orgcontroller::class,'update_org_team']);
Route::any('/update_payment/{id}',[orgcontroller::class,'update_payment']);
Route::any('/update_expence/{id}',[orgcontroller::class,'update_expence']);
Route::any('/logout',[orgcontroller::class,'logout']);


?>