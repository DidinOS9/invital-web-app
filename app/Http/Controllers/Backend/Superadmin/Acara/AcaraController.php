<?php

namespace App\Http\Controllers\Backend\Superadmin\Acara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function index() {
        return view('backend.superadmin.add_acara.index');
    }

    public function create() {
        return view('backend.superadmin.add_acara.create');
    }
}
