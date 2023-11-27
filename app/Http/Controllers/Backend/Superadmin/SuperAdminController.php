<?php

namespace App\Http\Controllers\Backend\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Acara;
use App\Models\Tamu;
use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function dashboard() {
        $jumlahAcara = Acara::count();
        $jumlahUsers = User::count();
        $jumlahVisitor = Tamu::count();


        return view('backend.superadmin.dashboard', compact('jumlahAcara', 'jumlahUsers', 'jumlahVisitor'));
    }
}
