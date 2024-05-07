<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {

        $title = 'Peringatan!';
        $text = 'Apakah anda yakin ingin menghapus?';
        $icon = "Question";
        confirmDelete($title, $text);

        $user = User::all();
        $showDashboard = auth()->user()->isAdmin();

        //mengirim data profile ke view index
        return view('user.index', compact('user', 'showDashboard'));
    }
    public function show($id)
    {
        $showDashboard = auth()->user()->isAdmin();
        $user = DB::table('users')->find($id);
        return view('user.detailuser', compact('user', 'showDashboard'));
    }
    public function edit($id)
    {
        $showDashboard = auth()->user()->isAdmin();
        $user = DB::table('users')->find($id);
        return view('user.edituser', compact('user', 'showDashboard'));
    }

    public function update(Request $request, $id)
    {
        $showDashboard = auth()->user()->isAdmin();
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|in:admin,user',
        ]);

        $request = DB::table('users')->where('id', $id)->update([
            'name' => $request->nama,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        Alert::success('Success', 'Data Berhasil diupdate');
        return redirect('/user');
    }
    public function destroy($id)
    {
        $showDashboard = auth()->user()->isAdmin();
        $user = DB::table('users')->where('id', $id)->delete();
        Alert::success('Success', 'Data Berhasil di Hapus');
        return redirect('/user');
    }
}
