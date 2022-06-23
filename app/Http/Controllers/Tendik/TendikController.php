<?php

namespace App\Http\Controllers\Tendik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Datatendik;
use App\Models\Datakeluargatendik;
use App\Models\Pekerjaantendik;
use App\Models\Datapendidikantendik;
use App\Models\DataPKtendik;
use Illuminate\Support\Facades\Auth;

class TendikController extends Controller
{
    public function Perubahan()
    {

        $item = DataPKtendik::all();
        return view('dashboard.tendik.master.perubahan.index', [
            'item' => $item

        ]);
    }
    public function Perubahantendik()
    {

        $item = DataPKtendik::all();
        return view('dashboard.admin.tendik.perubahan.index', [
            'item' => $item

        ]);
    }
    public function createperubahan()
    {
        $item = DataPKtendik::all();
        $tendik = Datatendik::all();
        $keluarga = Datakeluargatendik::all();
        $pekerjaan = Pekerjaantendik::all();
        return view('dashboard.tendik.master.perubahan.create', [
            'tendik' => $tendik,
            'keluarga' => $keluarga,
            'pekerjaan' => $pekerjaan,
            'item' => $item
        ]);

    }
    function storeperubahan(Request $request)
    {

        //Validate inputs
        $validated = $request->validate([

            'nip' => 'required',
            'nama' => 'required',
            'jumlah_anak_awal' => 'required',
            'jumlah_anak_perubahan' => 'required',
            'akta' => 'required',
            'kk' => 'required'


        ]);

        $perubahan_data = new DataPKtendik();

        $perubahan_data->nip = $request->get('nip');
        $perubahan_data->nama = $request->get('nama');
        $perubahan_data->jumlah_anak_awal = $request->get('jumlah_anak_awal');
        $perubahan_data->jumlah_anak_perubahan = $request->get('jumlah_anak_perubahan');
        if ($request->file('akta')) {
            $perubahan_data['akta'] = $request->file('akta')->store('akta-file');
        }
        if ($request->file('kk')) {
            $perubahan_data['kk'] = $request->file('kk')->store('kk-file');
        }
        $save = $perubahan_data->save();

        if ($save) {
            return redirect()->back()->with('success', 'You are now rcreated successfully as perubahan data keluarga');
        }
        else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to create');
        }
    }
    public function pendidikan()
    {

        $pendidikan = Datapendidikantendik::all();
        $tendik = Datatendik::all();
        return view('dashboard.tendik.master.pendidikan', [
            'pendidikan' => $pendidikan,
            'tendik' => $tendik

        ]);
    }
    public function keluarga()
    {

        $keluarga = Datakeluargatendik::all();
        $tendik = Datatendik::all();
        return view('dashboard.tendik.master.keluarga', [
            'keluarga' => $keluarga,
            'tendik' => $tendik

        ]);
    }
    public function index()
    {
        $item = Datatendik::all();
        $pekerjaan = Pekerjaantendik::all();
        return view('dashboard.admin.tendik.index', [
            'pekerjaan' => $pekerjaan,
            'items' => $item
        ]);
    }
    public function create()
    {
        $tendik = Datatendik::all();
        $pekerjaan = Pekerjaantendik::all();
        return view('dashboard.admin.tendik.create', [
            'tendik' => $tendik,
            'pekerjaan' => $pekerjaan
        ]);

    }
    function store(Request $request)
    {
        //Validate inputs
        $request->validate([

            'nip' => 'required|unique:datatendiks,nip',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgllahir' => 'required',
            'umur' => 'required',

            'nohp' => 'required',
            'alamat' => 'required',
        ]);

        $datatendik = new Datatendik();

        $datatendik->nip = $request->get('nip');
        $datatendik->nama = $request->get('nama');
        $datatendik->jenis_kelamin = $request->get('jenis_kelamin');
        $datatendik->tgllahir = $request->get('tgllahir');
        $datatendik->umur = $request->get('umur');
        $datatendik->id_pekerjaan = $request->get('id_pekerjaan');
        $datatendik->nohp = $request->get('nohp');
        $datatendik->alamat = $request->get('alamat');
        $datatendik->password = Hash::make("tendik123");
        $save = $datatendik->save();

        if ($save) {
            return redirect()->back()->with('success', 'You are now rcreated successfully as datatendik');
        }
        else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to create');
        }
    }

    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'nip' => 'required|exists:datatendiks,nip',
            'password' => 'required|min:5|max:30'
        ], [
            'nip.exists' => 'This nip is not exists in datatendik table'
        ]);

        $creds = $request->only('nip', 'password');

        if (Auth::guard('Tendik')->attempt($creds)) {
            return redirect()->route('Tendik.home');
        }
        else {
            return redirect()->route('Tendik.login')->with('fail', 'Incorrect Credentials');
        }
    }
    public function edit($id)
    {
        $item = Datatendik::findOrFail($id);
        $pekerjaan = Pekerjaantendik::all();
        return view('dashboard.admin.tendik.edit', [
            'item' => $item,
            'pekerjaan' => $pekerjaan
        ]);
    }
    public function show($id)
    {
        $item = Datatendik::findOrFail($id);
        $pekerjaan = Pekerjaantendik::all();
        return view('dashboard.admin.tendik.show', [
            'item' => $item,
            'pekerjaan' => $pekerjaan
        ]);
    }

    public function update(Request $request, $id)
    {
        $datatendik = Datatendik::findOrFail($id);

        $this->validate($request, [
            'nip' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgllahir' => 'required',
            'umur' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',

        ]);
        $datatendik = Datatendik::find($id);
        $datatendik->nip = $request->get('nip');
        $datatendik->nama = $request->get('nama');
        $datatendik->jenis_kelamin = $request->get('jenis_kelamin');
        $datatendik->tgllahir = $request->get('tgllahir');
        $datatendik->umur = $request->get('umur');
        $datatendik->id_pekerjaan = $request->get('id_pekerjaan');
        $datatendik->nohp = $request->get('nohp');
        $datatendik->alamat = $request->get('alamat');
        $datatendik->password = Hash::make("tendik123");
        $datatendik->save();

        return redirect()->route('admin.tendik')->with('status', 'Data successfully updated');
    }
    public function destroy($id)
    {
        $item = Datatendik::findOrfail($id);
        $item->delete();

        return redirect()->route('admin.tendik');
    }
    public function destroyperubahan($id)
    {
        $item = DataPKtendik::findOrfail($id);
        $item->delete();
        return redirect()->route('admin.perubahanKtendik')->with('status', 'Successfully');
    }
    function logout()
    {
        Auth::guard('Tendik')->logout();
        return redirect('/');
    }
}