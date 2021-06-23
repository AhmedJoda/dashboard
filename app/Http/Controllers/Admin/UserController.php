<?php

namespace App\Http\Controllers\Admin;

use App\Traits\JodaResources;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    use JodaResources;

    protected $model = User::class;
    protected $view = 'admin.user';
    protected $route = 'admin.users';
}
