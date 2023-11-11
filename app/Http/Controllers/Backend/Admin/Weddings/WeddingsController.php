<?php

namespace App\Http\Controllers\Backend\Admin\Weddings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WeddingsController extends Controller
{
    public function index() {
        return view('backend.admin.weddings.index');
    }

    public function create() {
        return view('backend.admin.weddings.create');

    }
}
