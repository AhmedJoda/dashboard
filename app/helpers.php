<?php


if (!function_exists('user_email')) {
    function isAdmin()
    {
        return auth()->user()->is_admin;
    }
}

if (!function_exists('user')) {
    function user()
    {
        return auth()->user();
    }
}
