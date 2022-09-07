<?php

namespace App\Http\Controllers;

use App\Models\ProsesUsulan;
use Illuminate\Http\Request;

use App\Models\DataDosen;
use App\Models\MataKuliah;
use App\Models\PembagianMatakuliah;
use App\Models\Surattugasmengajar;
class ProsesUsulanController extends Controller
{
    public function show($id)
    {
        $item = ProsesUsulan::findOrFail($id);
        return view('dashboard.admin.suratusulan.show', [
            'item' => $item,
        ]);
    }
    public function prosessurattugas(Request $request)
    {
        $surat = Surattugasmengajar::all();
        $items = PembagianMatakuliah::all();
        $datadosen = DataDosen::all();
        $matakuliah = MataKuliah::all();
        return view('dashboard.admin.prosessurattugas.index', [
            'datadosen' => $datadosen,
            'matakuliah' => $matakuliah,
            'items' => $items,
            'surat' => $surat
        ]);
    }
    public function destroy(ProsesUsulan $prosesUsulan, $id)
    {
        $item = ProsesUsulan::findOrfail($id);
        $item->delete();
        return redirect()->route('Unit.proses');
    }

    public function update(Request $request, $id)
    {
        $suratusulan = ProsesUsulan::findOrFail($id);
        $request->validate([
            'documentSK' => 'required'
        ]);
        if ($request->file('documentSK')) {
            $suratusulan['documentSK'] = $request->file('documentSK')->store('documentSK-file');
        }
        $suratusulan->save();
        return redirect()->route('admin.indexsuratusulan')->with('status', 'Data successfully diproses');
    }

    public function updateproses(Request $request, $id)
    {
        $suratusulan = ProsesUsulan::findOrFail($id);
        $request->validate([
            'disposisi' => 'required'
        ]);
        $suratusulan->disposisi = 'disposisi';
        $suratusulan->save();
        return redirect()->route('admin.indexsuratusulan')->with('status', 'Data Proses disposisi');
    }
}