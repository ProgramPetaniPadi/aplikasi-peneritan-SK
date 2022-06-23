<?php

namespace App\Http\Controllers\Pekerjaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pekerjaandosen;
class PekerjaanControllers extends Controller

{
    public function index()
    {
        $items = Pekerjaandosen::all();
        return view('dashboard.admin.dosen.pekerjaan.index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        $items = Pekerjaandosen::all();
        return view('dashboard.admin.dosen.pekerjaan.create', [
            'items' => $items
        ]);

    }

    function store(Request $request)
    {
        //Validate inputs
        $request->validate([

            'pekerjaan' => 'required',
        ]);
        $pekerjaan = new Pekerjaandosen();
        $pekerjaan->pekerjaan = $request->get('pekerjaan');
        $save = $pekerjaan->save();

        if ($save) {
            return redirect()->route('admin.pekerjaandosen')->with('status', 'You are now rcreated successfully as pekerjaan');
        }
        else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to create');
        }
    }

    public function edit($id)
    {
        $item = Pekerjaandosen::findOrFail($id);

        return view('dashboard.admin.dosen.pekerjaan.edit', [
            'item' => $item]);
    }

    function update(Request $request, $id)
    {
        $pekerjaan = Pekerjaandosen::findOrFail($id);
        $this->validate($request, [

            'pekerjaan' => 'required',
        ]);
        $pekerjaan = Pekerjaandosen::find($id);
        $pekerjaan->pekerjaan = $request->get('pekerjaan');
        $pekerjaan->save();

        return redirect()->route('admin.pekerjaan')->with('status', 'Data successfully updated');
    }
    public function destroy($id)
    {
        $item = Pekerjaandosen::findOrfail($id);
        $item->delete();

        return redirect()->route('admin.pekerjaandosen')->with('status', 'Data successfully Dihapus');
    }


}