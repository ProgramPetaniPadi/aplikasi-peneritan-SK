<?php

namespace App\Http\Controllers\Admin;
use App\Models\Dataunit;
use App\Models\User;
use App\Models\ProsesUsulan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\DataDosen;
use App\Models\MataKuliah;
use App\Models\Surattugasmengajar;
use App\Models\PembagianMatakuliah;
use App\Models\suratskbebanmengajar;
use App\Models\SKBebanmengajar;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $items = PembagianMatakuliah::get()->count();
        $item = suratskbebanmengajar::get()->count();
        $SK = SKBebanmengajar::get()->count();
        $unit = Dataunit::get()->count();
        return view('dashboard.admin.home', [
            'unit' => $unit,
            'items' => $items,
            'item' => $item,
            'SK' => $SK,
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

    public function usulantugasbebanmengajar($id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.admin.suratusulan.print', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,

        ]);
    }
    public function printsuratptugas($id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.admin.suratusulan.printsurat', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
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
    public function usulansurat()
    {
        $surat = Surattugasmengajar::all();
        $items = PembagianMatakuliah::all();
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.admin.suratusulan.index', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
            'surat' => $surat
        ]);
    }
    public function showusulanmengajar($id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.admin.suratusulan.show', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
        ]);
    }
    public function showsurat($id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.admin.suratusulan.showsurat', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
        ]);
    }
    public function lembaracc($id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        return view('dashboard.admin.suratusulan.lembaracc', [
            'items' => $items,
        ]);
    }
    public function tugasbebanmengajar($id)
    {
        $matakuliah = MataKuliah::all();
        $items = PembagianMatakuliah::findOrFail($id);
        return view('dashboard.admin.suratusulan.surattugasbebanmengajar', [
            'matakuliah' => $matakuliah,
            'items' => $items,
        ]);
    }

    public function lembaraccusulansk($id)
    {
        $items = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.admin.usulansk.lembaracc', [
            'items' => $items,
        ]);
    }
    public function usulansk()
    {
        $item = suratskbebanmengajar::all();
        return view('dashboard.admin.usulansk.index', [
            'item' => $item,
        ]
        );
    }
    public function lampiran($id)
    {
        $item = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.admin.usulansk.lampiran', [
            'item' => $item,
        ]);
    }
    public function suratskbebanmengajar($id)
    {
        $item = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.admin.usulansk.suratskbebanmengajar', [
            'item' => $item,
        ]);
    }
    public function printsuratuSK($id)
    {
        $item = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.admin.usulanSK.printsuratpermohonansk', [
            'items' => $item,
        ]);
    }
    public function SK()
    {
        $items = SKBebanmengajar::all();
        return view('dashboard.admin.skbebanmengajar.index', [
            'items' => $items,
        ]);
    }
    public function tambahSK()
    {
        $items = SKBebanmengajar::all();
        return view('dashboard.admin.skbebanmengajar.tambahsk', [
            'items' => $items,
        ]);
    }
    public function detailSK($id)
    {
        $items = SKBebanmengajar::findOrFail($id);
        return view('dashboard.admin.skbebanmengajar.detailsk', [
            'items' => $items,
        ]);
    }
    public function printSK($id)
    {
        $items = SKBebanmengajar::findOrFail($id);
        return view('dashboard.admin.skbebanmengajar.printsk', [
            'items' => $items,
        ]);
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}