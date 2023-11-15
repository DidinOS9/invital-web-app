<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Kehadiran;

class ApiKehadiranController extends Controller
{
    public function getAll() {
        $tamu = Kehadiran::all();
        return Response::json($tamu, 201);
    }

    public function createHadir(Request $request) {
        Kehadiran::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'kehadiran ditambahkan!'
        ], 201);
    }
}
