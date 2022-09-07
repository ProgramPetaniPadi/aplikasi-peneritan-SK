<?php

namespace App\Http\Controllers\Direktur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataDosen;
use App\Models\MataKuliah;
use App\Models\PembagianMatakuliah;
use App\Models\suratskbebanmengajar;
use App\Models\Surattugasmengajar;
use App\Models\SKBebanmengajar;

class DirekturController extends Controller
{
    public function index()
    {
        $surat = Surattugasmengajar::all();
        $items = PembagianMatakuliah::all();
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.direktur.index', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
            'surat' => $surat
        ]);
    }
    public function showusulanmengajar($id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.direktur.show', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
        ]);
    }
    public function showsurat($id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.direktur.showsurat', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
        ]);

    }
    public function surattugasbebanmengajar($id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.direktur.surattugasbebanmengajar', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
        ]);

    }
    public function lembaracc($id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        return view('dashboard.unit.direktur.lembaracc', [
            'items' => $items,
        ]);
    }
    public function lembaraccusulansk($id)
    {
        $items = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.unit.direktur.lembaraccusulansk', [
            'items' => $items,
        ]);
    }

    public function usulansk()
    {
        $item = suratskbebanmengajar::all();
        return view('dashboard.unit.direktur.usulansk.index', [
            'item' => $item,
        ]
        );
    }
    public function lampirandirektur($id)
    {
        $item = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.unit.direktur.usulansk.lampiran', [
            'item' => $item,
        ]);
    }
    public function suratskbebanmengajardirektur($id)
    {
        $item = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.unit.direktur.usulansk.suratskbebanmengajar', [
            'item' => $item,
        ]);
    }

    public function SK()
    {
        $items = SKBebanmengajar::all();
        return view('dashboard.unit.direktur.skbebanmengajar.index', [
            'items' => $items,
        ]);
    }

    public function detailSK($id)
    {
        $items = SKBebanmengajar::findOrFail($id);
        return view('dashboard.unit.direktur.skbebanmengajar.detailsk', [
            'items' => $items,
        ]);
    }
}