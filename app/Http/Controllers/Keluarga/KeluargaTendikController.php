<?php

namespace App\Http\Controllers\Keluarga;
use App\Models\Datakeluargatendik;
use App\Models\Datatendik;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeluargaTendikController extends Controller
{
    public function index()
    {
        $items = Datakeluargatendik::all();
        $tendik = Datatendik::all();
        return view('dashboard.admin.tendik.keluargatendik.index', [
            'items' => $items,
            'tendik' => $tendik
        ]);
    }

    public function create()
    {
        $items = Datakeluargatendik::all();
        $tendik = Datatendik::all();
        return view('dashboard.admin.tendik.keluargatendik.create', [
            'items' => $items,
            'tendik' => $tendik
        ]);
    }
    public function edit($id)
    {
        $item = Datakeluargatendik::findOrFail($id);
        $tendik = Datatendik::all();
        return view('dashboard.admin.tendik.keluargatendik.edit', [
            'item' => $item,
            'tendik' => $tendik
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([

            'nip' => 'required',
            'suamiistri' => 'required',
            'jumlah_anak' => 'required',
        ]);
        $keluarga = new Datakeluargatendik();
        $keluarga->nip = $request->get('nip');
        $keluarga->suamiistri = $request->get('suamiistri');
        $keluarga->jumlah_anak = $request->get('jumlah_anak');
        $save = $keluarga->save();

        if ($save) {
            return redirect()->back()->with('success', 'You are now rcreated successfully as keluarga');
        }
        else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to create');
        }
    }

    public function show($id)
    {
    //
    }




    public function update(Request $request, $id)
    {
        $keluarga = Datakeluargatendik::findOrFail($id);
        $this->validate($request, [
            'nip' => 'required',
            'nama' => 'required',
            'suamiistri' => 'required',
            'jumlah_anak' => 'required'
        ]);
        $keluarga = Datakeluargatendik::find($id);
        $keluarga->nip = $request->get('nip');
        $keluarga->nama = $request->get('nama');
        $keluarga->suamiistri = $request->get('suamiistri');
        $keluarga->jumlah_anak = $request->get('jumlah_anak');
        $keluarga->save();

        return redirect()->route('admin.Keluargatendik')->with('status', 'Data successfully updated');
    }


    public function destroy($id)
    {
        $item = Datakeluargatendik::findOrfail($id);
        $item->delete();

        return redirect()->route('admin.Keluargatendik')->with('status', 'Data successfully didalate');
    }
}