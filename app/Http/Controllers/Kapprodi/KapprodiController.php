<?php

namespace App\Http\Controllers\Kapprodi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataDosen;
use App\Models\Usulansk;
use App\Models\MataKuliah;
use App\Models\PembagianMatakuliah;
use App\Models\Surattugasmengajar;
use App\Models\suratskbebanmengajar;
use App\Models\SKBebanmengajar;

class KapprodiController extends Controller
{
    public function index()
    {
        $surat = Surattugasmengajar::all();
        $items = PembagianMatakuliah::all();
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.kapProdi.proses.index', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
            'surat' => $surat
        ]);
    }
    public function datadosen()
    {
        $datadosen = DataDosen::all();
        return view('dashboard.unit.kapProdi.dosen.index', [
            'datadosen' => $datadosen
        ]);

    }
    public function matakuliah()
    {
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.kapProdi.matakuliah.index', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah
        ]);

    }
    public function usulanmengajar()
    {

        $items = PembagianMatakuliah::all();
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.kapProdi.usulanmengajar.index', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
        ]);
    }
    public function showusulanmengajar($id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.kapProdi.proses.show', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,

        ]);
    }
    public function printsurat()
    {
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.Unit.surat.usulanbebanmengajar', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah
        ]);

    }

    public function suratskbebanmengajar($id)
    {
        $surat = Surattugasmengajar::all();
        $items = PembagianMatakuliah::findOrFail($id);
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.kapProdi.proses.surattugasbebanmengajar', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
            'surat' => $surat
        ]);
    }
    public function usulansk()
    {
        $item = suratskbebanmengajar::all();
        return view('dashboard.unit.kapprodi.usulansk.index', [
            'item' => $item,
        ]
        );
    }
    public function lampirankapprodi($id)
    {
        $item = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.unit.kapProdi.usulansk.lampirankapprodi', [
            'item' => $item,
        ]);
    }
    public function suratskbebanmengajarkaprodi($id)
    {
        $item = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.unit.kapProdi.usulansk.suratskbebanmengajar', [
            'item' => $item,
        ]);
    }
    public function SK()
    {
        $items = SKBebanmengajar::all();
        return view('dashboard.unit.kapProdi.skbebanmengajar.index', [
            'items' => $items,
        ]);
    }

    public function detailSK($id)
    {
        $items = SKBebanmengajar::findOrFail($id);
        return view('dashboard.unit.kapProdi.skbebanmengajar.detailsk', [
            'items' => $items,
        ]);
    }
}