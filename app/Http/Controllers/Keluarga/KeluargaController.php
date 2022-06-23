<?php

namespace App\Http\Controllers\Keluarga;
use App\Models\Datakeluarga;
use App\Models\Datadosen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{

    public function index()
    {
        $items = Datakeluarga::all();
        return view('dashboard.admin.dosen.keluarga.index', [
            'items' => $items
        ]);

    }
    public function create()
    {
        $items = Datakeluarga::all();
        $dosen = Datadosen::all();
        return view('dashboard.admin.dosen.keluarga.create', [
            'dosen' => $dosen,
            'items' => $items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'nip' => 'required',
            'suamiistri',
            'jumlah_anak',
        ]);
        $keluarga = new Datakeluarga();
        $keluarga->nip = $request->get('nip');
        $keluarga->suamiistri = $request->get('suamiistri');
        $keluarga->jumlah_anak = $request->get('jumlah_anak');
        $keluarga->save();

        if ($keluarga) {
            return redirect()->back()->with('success', 'You are now rcreated successfully as keluarga');
        }
        else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //
    }

    public function edit($id)
    {
        $dosen = Datadosen::all();
        $item = Datakeluarga::findOrFail($id);
        return view('dashboard.admin.dosen.keluarga.edit', [
            'dosen' => $dosen,
            'item' => $item
        ]);
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
        $keluarga = Datakeluarga::findOrFail($id);
        $this->validate($request, [
            'nip' => 'required',
            'suamiistri',
            'jumlah_anak',
        ]);
        $keluarga = Datakeluarga::find($id);
        $keluarga->nip = $request->get('nip');
        $keluarga->suamiistri = $request->get('suamiistri');
        $keluarga->jumlah_anak = $request->get('jumlah_anak');
        $keluarga->save();
        return redirect()->route('admin.Keluargadosen')->with('status', 'Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Datakeluarga::findOrfail($id);
        $item->delete();

        return redirect()->route('admin.Keluargadosen')->with('status', 'Data successfully didalate');
    }
}