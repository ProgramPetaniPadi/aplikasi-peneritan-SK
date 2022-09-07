<?php

namespace App\Http\Controllers\Surattugasmengajar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Surattugasmengajar;

class SurattugasmengajarController extends Controller
{
    public function storesurattugas(Request $request)
    {
        $request->validate([

            'nosurat' => 'required',
            'lampiran' => 'required',
            'tgl' => 'required',
            'semester' => 'required',
            'tahun_akademik' => 'required',
            'ketua_jurusan' => 'required',
            'nama_ketua_jurusan' => 'required',
            'nip_ketua_jurusan' => 'required',
            'ketua_prodi' => 'required',
            'nama_ketua_prodi' => 'required',
            'nip_ketua_prodi' => 'required',
        ]);
        $surattugasmengajar = new Surattugasmengajar();
        $surattugasmengajar->nosurat = $request->get('nosurat');
        $surattugasmengajar->lampiran = $request->get('lampiran');
        $surattugasmengajar->tgl = $request->get('tgl');
        $surattugasmengajar->semester = $request->get('semester');
        $surattugasmengajar->tahun_akademik = $request->get('tahun_akademik');
        $surattugasmengajar->ketua_jurusan = $request->get('ketua_jurusan');
        $surattugasmengajar->nama_ketua_jurusan = $request->get('nama_ketua_jurusan');
        $surattugasmengajar->nip_ketua_jurusan = $request->get('nip_ketua_jurusan');
        $surattugasmengajar->ketua_prodi = $request->get('ketua_prodi');
        $surattugasmengajar->nama_ketua_prodi = $request->get('nama_ketua_prodi');
        $surattugasmengajar->nip_ketua_prodi = $request->get('nip_ketua_prodi');

        $surattugasmengajar->save();
        return redirect()->route('Unit.suratpermohonanbebanmengajar')->with('status', 'Data successfully ditabah');
    }
}