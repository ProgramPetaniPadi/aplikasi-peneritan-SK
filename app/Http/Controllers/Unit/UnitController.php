<?php

namespace App\Http\Controllers\Unit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProsesUsulan;
use App\Models\Dataunit;
use App\Models\DataDosen;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\Hash;
use App\Models\PembagianMatakuliah;
use App\Models\suratskbebanmengajar;
use App\Models\SKBebanmengajar;
use App\Models\Surattugasmengajar;
class UnitController extends Controller
{
    function check(Request $request)
    {

        $request->validate([
            'nip' => 'required|exists:unitsk,nip',
            'password' => 'required|min:5|max:30'
        ], [
            'nip.exists' => 'This nip is not exists in unit table'
        ]);
        $creds = $request->only('nip', 'password');
        if (Auth::guard('Unit')->attempt($creds)) {
            return redirect()->route('Unit.home');

        }
        else {
            return redirect()->route('Unit.login')->with('fail', 'Incorrect credentials');
        }
    }


    public function home()
    {
        $items = PembagianMatakuliah::get()->count();
        $item = suratskbebanmengajar::get()->count();
        $SK = SKBebanmengajar::get()->count();
        $unit = Dataunit::get()->count();
        return view('dashboard.unit.home', [
            'unit' => $unit,
            'items' => $items,
            'item' => $item,
            'SK' => $SK,

        ]);
    }
    public function index()
    {
        $dataunit = Dataunit::all();
        $item = ProsesUsulan::all();
        return view('dashboard.unit.proses', [
            'item' => $item,
            'dataunit' => $dataunit

        ]);
    }
    public function printsuratuSK($id)
    {
        $item = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.unit.printsuratpermohonansk', [
            'items' => $item,
        ]);
    }
    public function printsuratSK($id)
    {
        $surat = Surattugasmengajar::all();
        $items = PembagianMatakuliah::findOrFail($id);
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.printsurattugasbebanmengajar', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
            'surat' => $surat
        ]);
    }
    public function printSK($id)
    {
        $items = SKBebanmengajar::findOrFail($id);
        return view('dashboard.unit.printsk', [
            'items' => $items,
        ]);
    }
    public function indexadmin()
    {

        $item = Dataunit::all();
        return view('dashboard.admin.unit.index', [
            'item' => $item

        ]);
    }
    public function printsuratptugas($id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.printsurat', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
        ]);
    }

    public function create()
    {
        $item = Dataunit::all();
        return view('dashboard.admin.unit.create', [
            'item' => $item

        ]);
    }
    public function createunit()
    {
        $item = Dataunit::all();
        return view('dashboard.unit.create', [
            'item' => $item

        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone',
            'nip' => 'required',
            'password',
            'jabatan_fungsional' => 'required'
        ]);
        $unit = new Dataunit();
        $unit->name = $request->get('name');
        $unit->phone = $request->get('phone');
        $unit->nip = $request->get('nip');
        $unit->password = Hash::make("Unit123");
        $unit->jabatan_fungsional = $request->get('jabatan_fungsional');
        $unit->save();
        return redirect()->route('admin.unit')->with('status', 'Data successfully ditabah');


    }
    public function storeunit(Request $request)
    {
        $request->validate([
            'nama_unit' => 'required',
            'judul_usulan' => 'required',
            'document' => 'required',
            'lampiran' => 'required'

        ]);
        $unit = new ProsesUsulan();
        $unit->nama_unit = $request->get('nama_unit');
        $unit->judul_usulan = $request->get('judul_usulan');
        $unit->buk_persuratan = '0';
        $unit->wadir2 = '0';

        if ($request->file('document')) {
            $unit['document'] = $request->file('document')->store('document-file');
        }
        if ($request->file('lampiran')) {
            $unit['lampiran'] = $request->file('lampiran')->store('lampiran-file');
        }
        $unit->save();
        return redirect()->route('Unit.proses')->with('status', 'You are now rcreated successfully as Surat Usulan');


    }

    public function show($id)
    {
        $item = Dataunit::findOrFail($id);
        return view('dashboard.unit.show', [
            'item' => $item

        ]);
    }
    public function showSK($id)
    {
        $item = Dataunit::findOrFail($id);
        return view('dashboard.unit.showpenerbitansk', [
            'item' => $item

        ]);
    }

    public function edit($id)
    {
    //
    }


    public function update(Request $request, $id)
    {
    //
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

    public function destroy($id)
    {
        $item = Dataunit::findOrfail($id);
        $item->delete();

        return redirect()->route('admin.unit');
    }
    public function logout()
    {
        Auth::guard('Unit')->logout();
        return redirect('/');
    }
}