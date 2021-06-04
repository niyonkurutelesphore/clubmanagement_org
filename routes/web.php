<?php
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\Club_membersController;
use App\Http\Controllers\AccountController;

Route::resource('clubs', ClubsController::class);

Route::resource('club_members', Club_membersController::class);

Route::post('/login', [AccountController::class,"login"]);
Route::get('/logout', [AccountController::class,"logout"]);

Route::get('/',function()
{
return view('index');
});

Route::get('/new_club',function()
{
return view('new_club');
});

Route::get('/admin',function()
{
return view('admin');
});


Route::get('/new_club_member',function()
{
return view('new_club_member');
});


Route::get('/club_leader_page',function()
{
return view('club_leader_page');
});


