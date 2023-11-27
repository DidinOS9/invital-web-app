<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Acara;
use Illuminate\Http\Request;
use App\Models\Kehadiran;
use App\Models\Tamu;
use App\Models\User;

class MonitorTamuController extends Controller
{
    public function index() {
        $istri = Acara::where('id_nama_suami', auth()->user()->id)->get();

        $id = Kehadiran::latest('created_at')->value('tamu_id');
        $nama = Tamu::where('id', $id)->value('nama_tamu');
        $status = Tamu::where('id', $id)->value('status');

        return view('backend.admin.monitor', compact('nama', 'status', 'istri'));
    }
}
