<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kehadiran;
use App\Models\Tamu as Visitor;


class ApiVisitorsController extends Controller
{
    public function getAll() {
        $tamu = Visitor::whereIn('id', function ($query) {
            $query->select('tamu_id')->from('kehadiran');
        })->select('id', 'nama_tamu', 'kelamin', 'alamat', 'status')->get();

        $tamu = $tamu->map(function ($item) {
            $item->waktu = Kehadiran::where('tamu_id', $item->id)->pluck('created_at')->first();
            return $item;
        });

        return response()->json(['message' => 200,'visitor' => $tamu]);
    }
}
