<?php

namespace App\Http\Controllers\Staffumum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Usulansk;
use App\Models\DataDosen;
use App\Models\MataKuliah;
use App\Models\PembagianMatakuliah;
use App\Models\Surattugasmengajar;
use App\Models\suratskbebanmengajar;
class StaffumumController extends Controller
{
    public function index()
    {
        $surat = Surattugasmengajar::all();
        $items = PembagianMatakuliah::all();
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.staffumum.index', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
            'surat' => $surat
        ]);
    }
    public function suratskbebanmengajar()
    {
        $item = Usulansk::all();
        $items = suratskbebanmengajar::all();
        return view('dashboard.unit.staffumum.suratskbebanmengajar', [
            'items' => $items,
            'item' => $item
        ]);
    }
    public function showusulanmengajar($id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.staffumum.show', [
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
        return view('dashboard.unit.staffumum.showsurat', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
        ]);
    }
    public function usulansk()
    {
        $item = suratskbebanmengajar::all();
        return view('dashboard.unit.staffumum.usulansk.index', [
            'item' => $item,
        ]
        );
    }
    public function lampirankapprodi($id)
    {
        $item = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.unit.staffumum.usulansk.lampiran', [
            'item' => $item,
        ]);
    }
    public function suratskbebanmengajarstaffumum($id)
    {
        $item = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.unit.staffumum.usulansk.suratskbebanmengajar', [
            'item' => $item,
        ]);
    }
}