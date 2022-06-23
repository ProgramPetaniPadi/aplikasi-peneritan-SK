<?php

namespace App\Http\Controllers\Admin;
use App\Models\Datadosen;
use App\Models\Datatendik;
use App\Models\Dataperubahan;
use App\Models\Dataunit;
use App\Models\User;
use App\Models\ProsesUsulan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $dosen = Datadosen::get()->count();
        $tendik = Datatendik::get()->count();
        $prubahan = Dataperubahan::get()->count();
        $unit = Dataunit::get()->count();
        $user = User::get()->count();
        $proses = ProsesUsulan::get()->count();
        return view('dashboard.admin.home', [
            'tendik' => $tendik,
            'dosen' => $dosen,
            'perubahan' => $prubahan,
            'unit' => $unit,
            'user' => $user,
            'proses' => $proses
        ]);
    }
    public function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'This email is not exists in admins table'
        ]);

        $creds = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.home');
        }
        else {
            return redirect()->route('admin.login')->with('fail', 'Incorrect Credentials');
        }
    }

    public function indexubahpassword($id)
    {
        $item = Admin::findOrFail($id);

        return view('dashboard.admin.ubah_password.index', [
            'item' => $item,

        ]);
    }

    public function store(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $userPassword = $admin->password;

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);

        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['ubah_password' => 'password lama anda tidak sesuai']);
        }

        $admin->password = Hash::make($request->password);

        $admin->save();

        return redirect()->back()->with('status', 'password successfully updated');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}