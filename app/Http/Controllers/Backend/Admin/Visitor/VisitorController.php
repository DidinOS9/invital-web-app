<?php

namespace App\Http\Controllers\Backend\Admin\Visitor;

use App\Http\Controllers\Controller;
use App\Imports\VisitorImport;
use App\Models\Tamu;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class VisitorController extends Controller
{
    public function index() {
        $datatamu = Tamu::where('id_suami', auth()->user()->id)->get();
        $datauser = User::all();
        return view('backend.admin.visitor.index', compact('datatamu', 'datauser'));
    }

    public function create() {
        $datatamu = Tamu::all();
        return view('backend.admin.visitor.create', compact('datatamu'));
    }

    public function store(Request $request)
    {
        $userId = Auth::id();

        DB::table('tamu')->insert([
            'id_suami' => $userId,
            'nama_tamu' => $request->nama_tamu,
            'kelamin' => $request->kelamin,
            'alamat' => $request->alamat,
            'status' => $request->status,
        ]);

        return redirect()->route('visitor.index')->with('success', 'Data Tamu Baru Berhasil Disimpan');
    }

    public function edit($id)
    {
        $datatamu = Tamu::find($id);
        $datauser = User::all();
        return view('backend.admin.visitor.edit', compact( 'datatamu', 'datauser'));
    }

    public function update(Request $request, $id)
    {
        $data = Tamu::findOrFail($id); 
        $data->update($request->all());

        return redirect()->route('visitor.index')->with('success', 'Data Tamu Berhasil diperbaharui');
    }

    public function destroy($id)
    {
        DB::table('tamu')->where('id',$id)->delete();
        return redirect()->route('visitor.index')->with('success', 'Data Tamu berhasil dihapus');
    }

    //Menambahkan daftar tamu dengan file spreadsheet
    public function import(Request $request) {
        return view('visitor.index');
    }

    public function import_visitor(Request $request) {
        // dd($request->all());
        try {
            //code...
            Excel::import(new VisitorImport(), $request->file('file'));
            
            return redirect()->route('visitor.index')->with('success', 'Data Tamu Baru Berhasil Disimpan');
        } catch (\Exception $e) {
            return redirect()->route('visitor.index')->with('error', 'Gagal mengimpor data tamu. Pastikan file Excel valid.');
        }
        // return redirect()->back();
    }

    //Mendownload daftar tamu
    public function downloadPdf(PDF $pdf)
    {
        $datatamu = Tamu::where('id_suami', auth()->user()->id)->get();
        
        $pdf = $pdf->loadView('backend.admin.visitor.pdf', compact('datatamu'));

        return $pdf->download('list_tamu.pdf');
    }

    public function template()
    {
        $path=public_path('template/visitor_invital.xlsx');
        return response()->download($path);
    }
}
