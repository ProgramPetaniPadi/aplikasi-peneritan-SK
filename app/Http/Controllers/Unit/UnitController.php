<?php

namespace App\Http\Controllers\Unit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProsesUsulan;
use App\Models\Dataunit;
use Illuminate\Support\Facades\Hash;
class UnitController extends Controller
{
    function check(Request $request)
    {

        $request->validate([
            'nip' => 'required|exists:unitsk,nip',
            'password' => 'required|min:5|max:30'
        ], [
            'nip.exists' => 'This nip is not exists in unit table'
        ]);
        $creds = $request->only('nip', 'password');

        if (Auth::guard('Unit')->attempt($creds)) {
            return redirect()->route('Unit.home');
        }
        else {
            return redirect()->route('Unit.login')->with('fail', 'Incorrect credentials');
        }
    }


    public function home()
    {
        $dataunit = Dataunit::all();
        $item = ProsesUsulan::all();
        return view('dashboard.unit.home', [
            'item' => $item,
            'dataunit' => $dataunit

        ]);
    }
    public function index()
    {
        $dataunit = Dataunit::all();
        $item = ProsesUsulan::all();
        return view('dashboard.unit.proses', [
            'item' => $item,
            'dataunit' => $dataunit

        ]);
    }

    public function indexadmin()
    {
        $item = Dataunit::all();
        return view('dashboard.admin.unit.index', [
            'item' => $item

        ]);
    }


    public function create()
    {
        $item = Dataunit::all();
        return view('dashboard.admin.unit.create', [
            'item' => $item

        ]);
    }
    public function createunit()
    {
        $item = Dataunit::all();
        return view('dashboard.unit.create', [
            'item' => $item

        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone',
            'nip' => 'required',
            'password',
            'unit' => 'required'
        ]);
        $unit = new Dataunit();
        $unit->name = $request->get('name');
        $unit->phone = $request->get('phone');
        $unit->nip = $request->get('nip');
        $unit->password = Hash::make("Unit123");
        $unit->unit = $request->get('unit');
        $unit->save();
        return redirect()->route('admin.unit')->with('status', 'Data successfully ditabah');


    }
    public function storeunit(Request $request)
    {
        $request->validate([
            'nama_unit' => 'required',
            'judul_usulan' => 'required',
            'document' => 'required',

        ]);
        $unit = new ProsesUsulan();
        $unit->nama_unit = $request->get('nama_unit');
        $unit->judul_usulan = $request->get('judul_usulan');
        $unit->buk_persuratan = '0';
        $unit->seketaris_direktur = '0';
        $unit->direktur = '0';
        $unit->seketaris_direktur2 = '0';
        $unit->wadir2 = '0';
        $unit->koordinator = '0';
        $unit->buk_persuratan_sk = '0';

        if ($request->file('document')) {
            $unit['document'] = $request->file('document')->store('document-file');
        }
        $unit->save();
        return redirect()->route('Unit.proses')->with('status', 'You are now rcreated successfully as datadosen');


    }

    public function show($id)
    {
        $item = Dataunit::findOrFail($id);
        return view('dashboard.unit.show', [
            'item' => $item

        ]);
    }

    public function edit($id)
    {
    //
    }


    public function update(Request $request, $id)
    {
    //
    }

    public function destroy($id)
    {
        $item = Dataunit::findOrfail($id);
        $item->delete();

        return redirect()->route('admin.unit');
    }
    public function logout()
    {
        Auth::guard('Unit')->logout();
        return redirect('/');
    }
}