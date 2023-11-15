<?php

namespace App\Http\Controllers\Backend\Admin\Weddings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\ErrorCorrectionLevel;
use App\Models\Acara;
use App\Models\Tamu;

class addVisitorsController extends Controller
{
    public function index(Request $request) {
        $id_acara = $request->input('id');
        $tamu = Tamu::all();
        return view('backend.admin.weddings.addvisitor', compact('tamu', 'id_acara'));
    }

    public function selectedTamu(Request $request) {
        $id_acara = $request->input('id-acara');

        $acara = Acara::find($id_acara);
        $tamu_id = $request->input('selectedTamu');
        $tamu = Tamu::find($tamu_id);

        $qrcodes = [];
    
        // Loop melalui data tamu dan membuat QR code untuk setiap tamu
        foreach ($tamu as $tamu) {
            $name = $tamu->nama_tamu;
            $status = $tamu->status;
            $id = $tamu->id;
    
            // Gabungkan nama dan status menjadi teks yang akan diubah menjadi QR code
            $qrCodeText = base64_encode("$name::$status::$id");
    
            // Buat objek QR code
            $qrCode = new QrCode($qrCodeText);
            $qrCode->setSize(150);
            $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH);
    
            $qrcodes[] = [
                'name' => $name,
                'status' => $status,
                'id' => $id,

                'qrcode' => $qrCode->writeDataUri(),
            ];
        }

        return view('backend.admin.weddings.undangan', ['qrcodes' => $qrcodes], compact('acara', 'tamu'));
    }
}
