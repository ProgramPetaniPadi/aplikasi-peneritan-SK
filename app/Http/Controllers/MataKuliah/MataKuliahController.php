<?php

namespace App\Http\Controllers\MataKuliah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function storematakuliah(Request $request)
    {
        $request->validate([
            'id_dosen',
            'mata_kuliah' => 'required',
            'semester_kelas' => 'required',
            'sks_t_p' => 'required',
            'jamMK' => 'required',
            'kelas' => 'required',
            'totalSKS' => 'required'

        ]);
        $matakuliah = new MataKuliah();
        $matakuliah->id_dosen = $request->get('id_dosen');
        $matakuliah->mata_kuliah = $request->get('mata_kuliah');
        $matakuliah->semester_kelas = $request->get('semester_kelas');
        $matakuliah->sks_t_p = $request->get('sks_t_p');
        $matakuliah->jamMK = $request->get('jamMK');
        $matakuliah->kelas = $request->get('kelas');
        $matakuliah->totalSKS = $request->get('totalSKS');

        $matakuliah->save();
        return redirect()->route('Unit.matakuliah')->with('status', 'Data successfully ditabah');
    }
}