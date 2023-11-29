<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Acara;
use App\Models\User;

class ApiWeddingsController extends Controller


{
    public function index() {
        $acaraList = Acara::all()->map(function ($item) {
            $suami = User::where('id', $item->id_nama_suami)->select('name')->first();
            return [
                'nama_suami' => $suami->name,
                'nama_istri' => $item->nama_istri,
                'alamat_resepsi' => $item->alamat_resepsi,
                'tgl_resepsi' => $item->tgl_resepsi,
            ];
        });

        return response()->json($acaraList, 200);
    }

    public function show($id) {
        if ($id == 1) {
            return $this->index(); // Jika id adalah 1, panggil metode index
        } else {
            $suami = User::where('id', $id)->select('name')->first();
            $acara = Acara::where('id_nama_suami', $id)
                ->select('nama_istri', 'alamat_resepsi', 'tgl_resepsi')
                ->first();

                $acara['name_suami'] = $suami->name;

            return response()->json($acara, 200);
        }
    }
}
