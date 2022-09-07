<?php

namespace App\Http\Controllers\Koordinator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataDosen;
use App\Models\MataKuliah;
use App\Models\PembagianMatakuliah;
use App\Models\Surattugasmengajar;
use App\Models\suratskbebanmengajar;
use App\Models\SKBebanmengajar;

class KoordinatorController extends Controller
{
    public function index()
    {
        $surat = Surattugasmengajar::all();
        $items = PembagianMatakuliah::all();
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.koordinator.index', [
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
        return view('dashboard.unit.koordinator.show', [
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
        return view('dashboard.unit.koordinator.showsurat', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
        ]);

    }
    public function lembaracc($id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        return view('dashboard.unit.koordinator.lembaracc', [
            'items' => $items,
        ]);
    }
    public function suratskbebanmengajar()
    {
        $items = suratskbebanmengajar::all();
        return view('dashboard.unit.koordinator.suratskbebanmengajar', [
            'items' => $items,
        ]);
    }
    public function SK()
    {
        $items = SKBebanmengajar::all();
        return view('dashboard.unit.koordinator.skbebanmengajar.index', [
            'items' => $items,
        ]);
    }

    public function detailSK($id)
    {
        $items = SKBebanmengajar::findOrFail($id);
        return view('dashboard.unit.koordinator.skbebanmengajar.detailsk', [
            'items' => $items,
        ]);
    }
} 