<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Datadosen;
use App\Models\Pekerjaandosen;
use App\Models\Datapendidikan;
use App\Models\Datakeluarga;
use App\Models\Dataperubahan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class DosenControllers extends Controller
{
    public function Perubahan()
    {

        $item = Dataperubahan::all();
        return view('dashboard.dosen.master.perubahan.index', [
            'item' => $item

        ]);
    }
    public function Perubahandosen()
    {

        $item = Dataperubahan::all();
        return view('dashboard.admin.dosen.perubahan.index', [
            'item' => $item

        ]);

    }
    public function createperubahan()
    {
        $item = Dataperubahan::all();
        $dosen = Datadosen::all();
        $keluarga = Datakeluarga::all();
        $pekerjaan = Pekerjaandosen::all();
        return view('dashboard.dosen.master.perubahan.create', [
            'dosen' => $dosen,
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

        $perubahan_data = new Dataperubahan();

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
        $perubahan_data->save();
        return redirect()->route('Dosen.perubahan')->with('status', 'Data successfully updated');

    }

    public function pendidikan()
    {

        $pendidikan = Datapendidikan::all();
        $dosen = Datadosen::all();
        return view('dashboard.dosen.master.pendidikan', [
            'pendidikan' => $pendidikan,
            'dosen' => $dosen

        ]);
    }
    public function keluarga()
    {

        $keluarga = Datakeluarga::all();
        $dosen = Datadosen::all();
        return view('dashboard.dosen.master.keluarga', [
            'keluarga' => $keluarga,
            'dosen' => $dosen

        ]);
    }
    public function index()
    {
        $item = Datadosen::all();
        $pekerjaan = Pekerjaandosen::all();
        return view('dashboard.admin.dosen.index', [
            'pekerjaan' => $pekerjaan,
            'items' => $item

        ]);
    }
    public function create()
    {
        $dosen = Datadosen::all();
        $pekerjaan = Pekerjaandosen::all();
        return view('dashboard.admin.dosen.create', [
            'dosen' => $dosen,
            'pekerjaan' => $pekerjaan
        ]);

    }
    public function show($id)
    {

        $item = Datadosen::findOrFail($id);
        $pekerjaan = Pekerjaandosen::all();
        return view('dashboard.admin.dosen.show', [
            'pekerjaan' => $pekerjaan,
            'id_pekerjaan' => $item
        ]);
    }
    public function edit($id)
    {
        $item = Datadosen::findOrFail($id);
        $pekerjaan = Pekerjaandosen::all();
        return view('dashboard.admin.dosen.edit', [
            'item' => $item,
            'pekerjaan' => $pekerjaan
        ]);
    }

    function store(Request $request)
    {
        //Validate inputs
        $request->validate([

            'nip' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgllahir' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'nohp',
        ]);
        $datadosen = new Datadosen();
        $datadosen->nip = $request->get('nip');
        $datadosen->nama = $request->get('nama');
        $datadosen->jenis_kelamin = $request->get('jenis_kelamin');
        $datadosen->tgllahir = $request->get('tgllahir');
        $datadosen->umur = $request->get('umur');
        $datadosen->id_pekerjaan = $request->get('id_pekerjaan');
        $datadosen->nohp = $request->get('nohp');
        $datadosen->alamat = $request->get('alamat');
        $datadosen->password = Hash::make("dosen123");
        $datadosen->save();
        return redirect()->route('admin.dosen')->with('status', 'Data successfully updated');


    }

    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'nip' => 'required|exists:datadosens,nip',
            'password' => 'required|min:5|max:30'
        ], [
            'nip.exists' => 'This nip is not exists in datadosens table'
        ]);

        $creds = $request->only('nip', 'password');

        if (Auth::guard('Dosen')->attempt($creds)) {
            return redirect()->route('Dosen.home');
        }
        else {
            return redirect()->route('Dosen.login')->with('fail', 'Incorrect Credentials');
        }
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datadosen = Datadosen::findOrFail($id);

        $this->validate($request, [
            'nip' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tgllahir' => 'required',
            'umur' => 'required',
            'nohp',
            'alamat' => 'required',

        ]);
        $datadosen = Datadosen::find($id);
        $datadosen->nip = $request->get('nip');
        $datadosen->nama = $request->get('nama');
        $datadosen->jenis_kelamin = $request->get('jenis_kelamin');
        $datadosen->tgllahir = $request->get('tgllahir');
        $datadosen->umur = $request->get('umur');
        $datadosen->id_pekerjaan = $request->get('id_pekerjaan');
        $datadosen->nohp = $request->get('nohp');
        $datadosen->alamat = $request->get('alamat');
        $datadosen->password = Hash::make("dosen123");
        $datadosen->save();
        return redirect()->route('admin.dosen')->with('status', 'Data successfully updated');
    }
    public function destroy($id)
    {
        $item = Datadosen::findOrfail($id);
        $item->delete();
        return redirect()->route('admin.dosen')->with('status', 'Data successfully dihapus');
    }
    public function destroyperubahan($id)
    {
        $item = Dataperubahan::findOrfail($id);
        $item->delete();
        return redirect()->route('admin.perubahan')->with('status', 'Successfully');
    }
    public function indexubahpassword($id)
    {
        $item = Datadosen::findOrFail($id);

        return view('dashboard.dosen.ubah_password.index', [
            'item' => $item,

        ]);
    }
    public function storechange(Request $request, $id)
    {
        $dosen = Datadosen::findOrFail($id);

        $userPassword = $dosen->password;

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);

        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['ubah_password' => 'password lama anda tidak sesuai']);
        }

        $dosen->password = Hash::make($request->password);

        $dosen->save();

        return redirect()->back()->with('status', 'password successfully updated');
    }
    function logout()
    {
        Auth::guard('Dosen')->logout();
        return redirect('/');
    }
}