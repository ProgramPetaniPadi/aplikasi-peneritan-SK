<?php

namespace App\Http\Controllers\SKBebanmengajar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SKBebanmengajar;
class SKBebanmengajarController extends Controller
{
    public function storesk(Request $request)
    {
        $request->validate([
            'nosurat',
            'semester',
            'program_studi',
            'tahun_akademik',
            'nama_dosen',
            'jurusan',
            'no1', 'no2', 'no3', 'no4',
            'matakuliah1', 'matakuliah2', 'matakuliah3', 'matakuliah4',
            'sks_t_p1', 'sks_t_p2', 'sks_t_p3', 'sks_t_p4',
            'kelas1', 'kelas2', 'kelas3', 'kelas4',
            'semester1', 'semester2', 'semester3', 'semester4',
            'jumlah_sks1', 'jumlah_sks2', 'jumlah_sks3', 'jumlah_sks4',
            'tanggal', 'nama_direktur', 'nip_direktur',

        ]);
        $SKBebanmengajar = new SKBebanmengajar();
        $SKBebanmengajar->nosurat = $request->get('nosurat');
        $SKBebanmengajar->semester = $request->get('semester');
        $SKBebanmengajar->program_studi = $request->get('program_studi');
        $SKBebanmengajar->tahun_akademik = $request->get('tahun_akademik');
        $SKBebanmengajar->nama_dosen = $request->get('nama_dosen');
        $SKBebanmengajar->jurusan = $request->get('jurusan');
        $SKBebanmengajar->no1 = $request->get('no1');
        $SKBebanmengajar->no2 = $request->get('no2');
        $SKBebanmengajar->no3 = $request->get('no3');
        $SKBebanmengajar->no4 = $request->get('no4');
        $SKBebanmengajar->matakuliah1 = $request->get('matakuliah1');
        $SKBebanmengajar->matakuliah2 = $request->get('matakuliah2');
        $SKBebanmengajar->matakuliah3 = $request->get('matakuliah3');
        $SKBebanmengajar->matakuliah4 = $request->get('matakuliah4');
        $SKBebanmengajar->sks_t_p1 = $request->get('sks_t_p1');
        $SKBebanmengajar->sks_t_p2 = $request->get('sks_t_p2');
        $SKBebanmengajar->sks_t_p3 = $request->get('sks_t_p3');
        $SKBebanmengajar->sks_t_p4 = $request->get('sks_t_p4');
        $SKBebanmengajar->kelas1 = $request->get('kelas1');
        $SKBebanmengajar->kelas2 = $request->get('kelas2');
        $SKBebanmengajar->kelas3 = $request->get('kelas3');
        $SKBebanmengajar->kelas4 = $request->get('kelas4');
        $SKBebanmengajar->semester1 = $request->get('semester1');
        $SKBebanmengajar->semester2 = $request->get('semester2');
        $SKBebanmengajar->semester3 = $request->get('semester3');
        $SKBebanmengajar->semester4 = $request->get('semester4');
        $SKBebanmengajar->jumlah_sks1 = $request->get('jumlah_sks1');
        $SKBebanmengajar->jumlah_sks2 = $request->get('jumlah_sks2');
        $SKBebanmengajar->jumlah_sks3 = $request->get('jumlah_sks3');
        $SKBebanmengajar->jumlah_sks4 = $request->get('jumlah_sks4');
        $SKBebanmengajar->tanggal = $request->get('tanggal');
        $SKBebanmengajar->nama_direktur = $request->get('nama_direktur');
        $SKBebanmengajar->nip_direktur = $request->get('nip_direktur');

        $SKBebanmengajar->save();
        return redirect()->route('admin.sk')->with('status', 'Data successfully ditabah');
    }

    public function disposisi(Request $request, $id)
    {
        $items = SKBebanmengajar::findOrFail($id);
        $this->validate($request, [
            'qr_direktur'
        ]);
        $items = SKBebanmengajar::find($id);
        $items->qr_direktur = $request->get('qr_direktur');
        $items->save();
        return redirect()->route('Unit.skdirektur')->with('status', 'Data successfully ditabah');
    }
}