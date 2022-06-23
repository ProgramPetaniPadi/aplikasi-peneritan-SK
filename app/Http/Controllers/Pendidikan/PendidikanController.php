<?php

namespace App\Http\Controllers\Pendidikan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Datapendidikan;
use App\Models\Datadosen;

class PendidikanController extends Controller
{

    public function index()
    {
        $items = Datapendidikan::all();
        return view('dashboard.admin.dosen.pendidikan.index', [
            'items' => $items
        ]);

    }


    public function create()
    {
        $items = Datapendidikan::all();
        $dosen = Datadosen::all();
        return view('dashboard.admin.dosen.pendidikan.create', [
            'dosen' => $dosen,
            'items' => $items
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([

            'nip' => 'required',
            'pendidikan_terakhir' => 'required',
            'tahun_kelulusan' => 'required',
        ]);
        $pendidikan = new Datapendidikan();
        $pendidikan->nip = $request->get('nip');
        $pendidikan->pendidikan_terakhir = $request->get('pendidikan_terakhir');
        $pendidikan->tahun_kelulusan = $request->get('tahun_kelulusan');
        $pendidikan->save();
        return redirect()->route('admin.Pendidikandosen')->with('status', 'Data successfully ditabah');

    }

    public function show($id)
    {
    //
    }


    public function edit($id)
    {
        $item = Datapendidikan::findOrFail($id);

        return view('dashboard.admin.dosen.pendidikan.edit', [
            'item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $pendidikan = Datapendidikan::findOrFail($id);
        $this->validate($request, [
            'nip' => 'required',
            'nama' => 'required',
            'pendidikan_terakhir' => 'required',
            'tahun_kelulusan' => 'required'
        ]);
        $pendidikan = Datapendidikan::find($id);
        $pendidikan->nip = $request->get('nip');
        $pendidikan->nama = $request->get('nama');
        $pendidikan->pendidikan_terakhir = $request->get('pendidikan_terakhir');
        $pendidikan->tahun_kelulusan = $request->get('tahun_kelulusan');
        $pendidikan->save();
        return redirect()->route('admin.Pendidikandosen')->with('status', 'Data successfully updated');
    }

    public function destroy($id)
    {
        $item = Datapendidikan::findOrfail($id);
        $item->delete();

        return redirect()->route('admin.Pendidikandosen')->with('status', 'Data successfully didalate');
    }
}