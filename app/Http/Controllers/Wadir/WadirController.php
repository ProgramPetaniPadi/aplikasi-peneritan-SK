<?php

namespace App\Http\Controllers\Wadir;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataDosen;
use App\Models\MataKuliah;
use App\Models\PembagianMatakuliah;
use App\Models\suratskbebanmengajar;
use App\Models\Surattugasmengajar;
use App\Models\SKBebanmengajar;

class WadirController extends Controller
{
    public function index()
    {
        $surat = Surattugasmengajar::all();
        $items = PembagianMatakuliah::all();
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.wadir.index', [
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
        return view('dashboard.unit.wadir.show', [
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
        return view('dashboard.unit.wadir.showsurat', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
        ]);

    }
    public function lembaracc($id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        return view('dashboard.unit.wadir.lembaracc', [
            'items' => $items,
        ]);
    }
    public function lembaraccusulansk($id)
    {
        $items = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.unit.wadir.lembaraccskwadir', [
            'items' => $items,
        ]);
    }
    public function usulansk()
    {
        $item = suratskbebanmengajar::all();
        return view('dashboard.unit.wadir.usulansk.index', [
            'item' => $item,
        ]
        );
    }
    public function lampiranwadir($id)
    {
        $item = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.unit.wadir.usulansk.lampiran', [
            'item' => $item,
        ]);
    }
    public function suratskbebanmengajarwadir($id)
    {
        $item = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.unit.wadir.usulansk.suratskbebanmengajar', [
            'item' => $item,
        ]);
    }
    public function SK()
    {
        $items = SKBebanmengajar::all();
        return view('dashboard.unit.wadir.skbebanmengajar.index', [
            'items' => $items,
        ]);
    }

    public function detailSK($id)
    {
        $items = SKBebanmengajar::findOrFail($id);
        return view('dashboard.unit.wadir.skbebanmengajar.detailsk', [
            'items' => $items,
        ]);
    }
}