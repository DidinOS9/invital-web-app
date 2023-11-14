<?php

namespace App\Http\Controllers\Backend\Admin\Weddings;

use App\Http\Controllers\Controller;
use App\Models\Acara;
use App\Models\User;
use Illuminate\Http\Request;

class WeddingsController extends Controller
{
    public function index() {
        $dataacara = Acara::where('id_nama_suami', auth()->user()->id)->get();
        $datauser = User::all();
        return view('backend.admin.weddings.index', compact('dataacara', 'datauser'));
    }

    public function show($id) {
        return view('backend.admin.weddings.show');

    }
}
