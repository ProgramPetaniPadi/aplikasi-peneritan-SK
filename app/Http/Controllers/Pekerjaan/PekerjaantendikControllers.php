<?php

namespace App\Http\Controllers\Pekerjaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pekerjaantendik;

class PekerjaantendikControllers extends Controller
{
    public function index()
    {
        $items = Pekerjaantendik::all();
        return view('dashboard.admin.tendik.pekerjaan.index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        $items = Pekerjaantendik::all();
        return view('dashboard.admin.tendik.pekerjaan.create', [
            'items' => $items
        ]);

    }

    function store(Request $request)
    {
        //Validate inputs
        $request->validate([

            'pekerjaan' => 'required',
        ]);
        $pekerjaan = new Pekerjaantendik();
        $pekerjaan->pekerjaan = $request->get('pekerjaan');
        $save = $pekerjaan->save();

        if ($save) {
            return redirect()->back()->with('success', 'You are now rcreated successfully as pekerjaan');
        }
        else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to create');
        }
    }

    public function edit($id)
    {
        $item = Pekerjaantendik::findOrFail($id);

        return view('dashboard.admin.tendik.pekerjaan.edit', [
            'item' => $item]);
    }

    function update(Request $request, $id)
    {
        $pekerjaan = Pekerjaantendik::findOrFail($id);
        $this->validate($request, [

            'pekerjaan' => 'required',
        ]);
        $pekerjaan = Pekerjaantendik::find($id);
        $pekerjaan->pekerjaan = $request->get('pekerjaan');
        $pekerjaan->save();

        return redirect()->route('admin.pekerjaantendik')->with('status', 'Data successfully updated');
    }
    public function destroy($id)
    {
        $item = Pekerjaantendik::findOrfail($id);
        $item->delete();

        return redirect()->route('admin.pekerjaantendik');
    }
}