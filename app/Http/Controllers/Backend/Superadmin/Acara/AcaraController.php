<?php

namespace App\Http\Controllers\Backend\Superadmin\Acara;

use App\Http\Controllers\Controller;
use App\Models\Acara;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcaraController extends Controller
{
    public function index() {
        $datauser = User::all();
        $dataacara = Acara::all();
        return view('backend.superadmin.add_acara.index', compact('dataacara', 'datauser'));
    }

    public function create()
    {
        $dataacara = Acara::all();
        $datauser = DB::table('users')->where('role', 'admin') ->get();

        // dd($dataacara);
        return view('backend.superadmin.add_acara.create', compact('dataacara','datauser'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Acara::create($request->all());
        return redirect()->route('acara.index')->with('success', 'Data Acara Baru Berhasil Disimpan');
    }

    public function edit($id)
    {
        $dataacara = Acara::find($id);
        $namasuami = User::all();
        // $dataacara = DB::table('acara')->where('id', $id)->first();
        // dd($dataacara);
        return view('backend.superadmin.add_acara.edit', compact( 'dataacara', 'namasuami'));
    }

    public function update(Request $request, $id)
    {
        $data = Acara::findOrFail($id); 
        $data->update($request->all());
        // dd($request->all());

        return redirect()->route('acara.index')->with('success', 'Acara Berhasil diperbaharui');
    }

    public function destroy($id)
    {
        DB::table('acara')->where('id',$id)->delete();
        return redirect()->route('acara.index')->with('success', 'Data Acara berhasil dihapus');
    }
}
