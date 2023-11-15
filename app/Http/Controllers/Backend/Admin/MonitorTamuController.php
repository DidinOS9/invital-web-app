<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kehadiran;
use App\Models\Tamu;

class MonitorTamuController extends Controller
{
    public function index() {
        $id = Kehadiran::latest('created_at')->value('tamu_id');
        $nama = Tamu::where('id', $id)->value('nama_tamu');

        return view('backend.admin.monitor', compact('nama'));
    }
}
