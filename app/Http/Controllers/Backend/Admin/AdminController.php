<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Acara;
use App\Models\Tamu;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        $Acara = Acara::where('id_nama_suami', auth()->user()->id)->get();
        $Tamu = Tamu::where('id_suami', auth()->user()->id)->get();

        return view('backend.admin.dashboard', compact('Acara', 'Tamu'));
    }
}
