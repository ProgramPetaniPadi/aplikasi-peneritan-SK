<?php

namespace App\Http\Controllers\Pendidikan;
use App\Models\Datapendidikantendik;
use App\Models\Datatendik;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendidikanTendikController extends Controller
{
    public function index()
    {
        $items = Datapendidikantendik::all();
        $tendik = Datatendik::all();
        return view('dashboard.admin.tendik.pendidikantendik.index', [
            'items' => $items,
            'tendik' => $tendik
        ]);
    }

    public function create()
    {
        $items = Datapendidikantendik::all();
        $tendik = Datatendik::all();
        return view('dashboard.admin.tendik.pendidikantendik.create', [
            'items' => $items,
            'tendik' => $tendik
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
            'pendidikan_terakhir' => 'required',
            'tahun_kelulusan' => 'required',
        ]);
        $pendidikan = new Datapendidikantendik();
        $pendidikan->nip = $request->get('nip');
        $pendidikan->pendidikan_terakhir = $request->get('pendidikan_terakhir');
        $pendidikan->tahun_kelulusan = $request->get('tahun_kelulusan');
        $save = $pendidikan->save();

        if ($save) {
            return redirect()->back()->with('success', 'You are now rcreated successfully as pendidikan');
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
        $item = Datapendidikantendik::findOrFail($id);

        return view('dashboard.admin.tendik.pendidikantendik.edit', [
            'item' => $item]);
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
        $pendidikan = Datapendidikantendik::findOrFail($id);
        $this->validate($request, [
            'nip' => 'required',
            'nama' => 'required',
            'pendidikan_terakhir' => 'required',
            'tahun_kelulusan' => 'required'
        ]);
        $pendidikan = Datapendidikantendik::find($id);
        $pendidikan->nip = $request->get('nip');
        $pendidikan->nama = $request->get('nama');
        $pendidikan->pendidikan_terakhir = $request->get('pendidikan_terakhir');
        $pendidikan->tahun_kelulusan = $request->get('tahun_kelulusan');
        $pendidikan->save();

        return redirect()->route('admin.Pendidikantendik')->with('status', 'Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Datapendidikantendik::findOrfail($id);
        $item->delete();

        return redirect()->route('admin.Pendidikantendik')->with('status', 'Data successfully didalate');
    }
}