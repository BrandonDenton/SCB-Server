<?php

use 'Auth';

/*
|--------------------------------------------------------------------------
| Login Route
|--------------------------------------------------------------------------
|
| This route handles authentication for a user of the plugin. *(Facebook
| Authentication is handled elsewhere in this directory)
|
*/

Route::get('/login', function () {
    if (Auth::attempt(['email' => $email, 'password' => $password])) {
        return redirect()->intended('welcome');     
    }
});
