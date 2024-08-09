<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('members', MemberController::class);
// Route::get('members/datatables', 'MemberController@datatables')->name('members.datatables');

// Route::get('/members', [MemberController::class, 'index'])->name('members.index');