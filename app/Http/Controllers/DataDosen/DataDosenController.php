<?php

namespace App\Http\Controllers\DataDosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataDosen;

class DataDosenController extends Controller
{
    public function storedatadosen(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        $datadosen = new DataDosen();
        $datadosen->nama = $request->get('nama');
        $datadosen->save();
        return redirect()->route('Unit.datadosen')->with('status', 'Data successfully ditabah');
    }
}