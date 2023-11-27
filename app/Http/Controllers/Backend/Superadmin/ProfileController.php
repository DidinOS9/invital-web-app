<?php

namespace App\Http\Controllers\Backend\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        return view('backend.superadmin.profile');
    }
}
