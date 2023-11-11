<?php

namespace App\Http\Controllers\Backend\Admin\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index() {
        return view('backend.admin.visitor.index');
    }

    public function create() {
        return view('backend.admin.visitor.create');
    }
}
