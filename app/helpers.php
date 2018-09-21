<?php

use Illuminate\Support\Facades\Auth;

/**
 * @return \TeachMe\Entities\User
 */
function currentUser()
{
    return Auth::user();
}