<?php

use Illuminate\Support\Facades\Route;

/*
-------------------------------------------------------------------
| Web Routes
-------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::resource('dashboard', 'App\Http\Controllers\DashboardController');

require __DIR__.'/auth.php';

Route::get('auth/user', function() {
	if(auth()->check())
		return response()->json([
			'authUser' => auth()->user()
		]);
	return null;
});

Route::get('chat/{chat}', 'App\Http\Controllers\ChatController@show')->name('chat.show');

Route::get('chat/with/{user}', 'App\Http\Controllers\ChatController@chat_with')->name('chat.with');

Route::get('chat/{chat}/get_users', '\App\Http\Controllers\ChatController@get_users')->name('chat.get_users');

Route::get('chat/{chat}/get_messages','\App\Http\Controllers\ChatController@get_messages')->name('chat.get_messages');

Route::post('message/sent', '\App\Http\Controllers\MessageController@sent')->name('message.sent');
