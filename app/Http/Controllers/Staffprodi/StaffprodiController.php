<?php

namespace App\Http\Controllers\Staffprodi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\DataDosen;
use App\Models\Usulansk;
use App\Models\Surattugasmengajar;
use App\Models\MataKuliah;
use App\Models\PembagianMatakuliah;
use App\Models\suratskbebanmengajar;

class StaffprodiController extends Controller
{
    public function index()
    {
        return view('dashboard.unit.staffprodi.proses.index');
    }
    public function usulanmengajar()
    {
        $surat = Surattugasmengajar::all();
        $items = PembagianMatakuliah::all();
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.staffprodi.usulanmengajar.index', [
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
        return view('dashboard.unit.staffprodi.usulanmengajar.show', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,

        ]);
    }
    public function suratpermohonanbebanmengajar($id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.unit.staffprodi.suratpermohonan.index', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
        ]);

    }
    public function usulansk()
    {
        $item = suratskbebanmengajar::all();
        return view('dashboard.unit.staffprodi.usulansk.index', [
            'item' => $item
        ]);

    }
    public function suratskbebanmengajar($id)
    {
        $item = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.unit.staffprodi.usulansk.suratskbebanmengajar', [
            'item' => $item,
        ]);
    }
    public function lampiranstaff($id)
    {
        $item = suratskbebanmengajar::findOrFail($id);
        return view('dashboard.unit.staffprodi.usulansk.lampiranstaff', [
            'item' => $item,
        ]);
    }
}