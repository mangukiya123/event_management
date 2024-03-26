<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\SendEmailController;




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

Route::any('/',[admincontroller::class,'welcome']);
Route::get('/dashboard',[admincontroller::class,'dashboard']);
Route::any('/addcapital',[admincontroller::class,'addcapital']);
Route::get('/viewcapital',[admincontroller::class,'viewcapital']);
Route::any('/addslider',[admincontroller::class,'addslider']);
Route::get('/viewslider',[admincontroller::class,'viewslider']);
Route::any('/addcategory',[admincontroller::class,'addcategory']);
Route::get('/viewcategory',[admincontroller::class,'viewcategory']);
Route::any('/addcity',[admincontroller::class,'addcity']);
Route::get('/viewcity',[admincontroller::class,'viewcity']);
Route::any('/addcomment',[admincontroller::class,'addcomment']);
Route::get('/viewcomment',[admincontroller::class,'viewcomment']);
Route::any('/addcountry',[admincontroller::class,'addcountry']);
Route::get('/viewcountry',[admincontroller::class,'viewcountry']);
Route::any('/adddate',[admincontroller::class,'adddate']);
Route::get('/viewdate',[admincontroller::class,'viewdate']);
Route::any('/addevent',[admincontroller::class,'addevent']);
Route::get('/viewevent',[admincontroller::class,'viewevent']);
Route::any('/addgallery',[admincontroller::class,'addgallery']);
Route::get('/viewgallery',[admincontroller::class,'viewgallery']);
Route::any('/addroomsandhotels',[admincontroller::class,'addroomsandhotels']);
Route::get('/viewroomsandhotels',[admincontroller::class,'viewroomsandhotels']);
Route::any('/addservices',[admincontroller::class,'addservices']);
Route::get('/viewservices',[admincontroller::class,'viewservices']);
Route::any('/addspeaker',[admincontroller::class,'addspeaker']);
Route::get('/viewspeaker',[admincontroller::class,'viewspeaker']);
Route::any('/addupcommingevent',[admincontroller::class,'addupcommingevent']);
Route::get('/viewupcommingevent',[admincontroller::class,'viewupcommingevent']);

Route::any('/forgetpassword',[admincontroller::class,'forgetpassword']);
Route::any('/recoverpassword',[admincontroller::class,'recoverpassword']);



//update and delete

Route::get('/delete_capital/{id}',[admincontroller::class,'delete_capital']);
Route::any('/updaet_capital/{id}',[admincontroller::class,'updaet_capital']);

Route::get('/delete_slider/{id}',[admincontroller::class,'delete_slider']);
Route::any('/update_slider/{id}',[admincontroller::class,'update_slider']);

Route::get('/delete_category/{id}',[admincontroller::class,'delete_category']);
Route::any('/update_category/{id}',[admincontroller::class,'update_category']);

Route::get('/delete_city/{id}',[admincontroller::class,'delete_city']);
Route::any('/update_city/{id}',[admincontroller::class,'update_city']);

Route::get('/delete_comment/{id}',[admincontroller::class,'delete_comment']);
Route::any('/update_comment/{id}',[admincontroller::class,'update_comment']);

Route::get('/delete_country/{id}',[admincontroller::class,'delete_country']);
Route::any('/update_country/{id}',[admincontroller::class,'update_country']);

Route::get('/delte_date/{id}',[admincontroller::class,'delte_date']);
Route::any('/update_date/{id}',[admincontroller::class,'update_date']);

Route::get('/delete_event/{id}',[admincontroller::class,'delete_event']);
Route::any('/update_event/{id}',[admincontroller::class,'update_event']);

Route::get('/delete_roomsandhetels/{id}',[admincontroller::class,'delete_roomsandhetels']);
Route::any('/update_roomsandhotels/{id}',[admincontroller::class,'update_roomsandhotels']);


Route::get('/delete_speaker/{id}',[admincontroller::class,'delete_speaker']);
Route::any('/update_speaker/{id}',[admincontroller::class,'update_speaker']);

Route::get('/delete_events/{id}',[admincontroller::class,'delete_events']);
Route::any('/update_events/{id}',[admincontroller::class,'update_events']);


Route::get('/delete_upevent/{id}',[admincontroller::class,'delete_upevent']);
Route::any('/update_upevent/{id}',[admincontroller::class,'update_upevent']);

Route::get('/delete_service/{id}',[admincontroller::class,'delete_service']);
Route::any('/update_service/{id}',[admincontroller::class,'update_service']);

Route::get('/delete_gallery/{id}',[admincontroller::class,'delete_gallery']);
Route::any('/update_gallery/{id}',[admincontroller::class,'update_gallery']);

Route::any('/logout',[admincontroller::class,'logout']);

Route::get('/profile',[admincontroller::class,'profile']);

Route::any('send-email', [SendEmailController::class, 'index']);
Route::any('verifyotp', [admincontroller::class,'verify_otp']);

