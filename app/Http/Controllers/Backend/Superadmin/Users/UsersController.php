<?php

namespace App\Http\Controllers\Backend\Superadmin\Users;

use Illuminate\Support\Str;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index() {
        $users = DB::table('users')->where('role', 'admin') ->get();
        return view('backend.superadmin.add_users.index', compact('users'));
    }

    public function create() {
        $users = null;
        return view('backend.superadmin.add_users.create', compact('users'));
    }

    public function store(Request $request): RedirectResponse {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'phone_number' => $request->phone_number,
            'instagram' => $request->instagram,
            'alamat' => $request->alamat,
        ]);

        event(new Registered($user));

        return redirect()->route('users.index')
                        ->with('succes', 'Data Client baru telah berhasil disimpan.');
    }

    public function edit(Request $request, $id) 
    {
        $users = User::findOrfail($id);
        return view('backend.superadmin.add_users.edit', compact('users'));
    }

    public function update(Request $request, $id) {
        // DB::table('users')->where('id',$request->id)->update([
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'phone_number' => $request->phone_number,
        //     'instagram' => $request->instagram,
        //     'alamat' => $request->alamat
        // ]);

        $data = User::findOrFail($id); 
        $data->update($request->all());

        return redirect()->route('users.index')
        ->with('succes', 'Data Client Berhasil Diperbarui.');
    }

    public function destroy($id) {
        DB::table('users')->where('id',$id)->delete();
        return redirect()->route('users.index')
                        ->with('succes', 'Data Client Berhasil Dihapus.');
    }
}


