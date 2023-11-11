<?php

namespace App\Http\Controllers\Backend\Superadmin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        return view('backend.superadmin.add_users.index');
    }

    public function create() {
        return view('backend.superadmin.add_users.create');
    }
}
