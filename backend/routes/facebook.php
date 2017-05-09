<?php

public function redirect()
{
    return Socialize::with('facebook')->redirect();
}

public function grabUserToken()
{
    $user = Socialize::with('facebook')->user();

    // $user->token;
}
