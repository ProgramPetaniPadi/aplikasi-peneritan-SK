<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Dataunit;
use App\Models\ProsesUsulan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class UserController extends Controller
{
    public function index()
    {
        $dataunit = Dataunit::all();
        $item = ProsesUsulan::all();
        return view('dashboard.user.home', [
            'item' => $item,
            'dataunit' => $dataunit,

        ]);
    }
    public function show(Request $request, $id)
    {
        $item = ProsesUsulan::findOrFail($id);
        return view('dashboard.user.show', [
            'item' => $item
        ]);
    }
    public function prosespersuratan(Request $request, $id)
    {
        $item = ProsesUsulan::findOrFail($id);
        return view('dashboard.user.proses.prosespersuratan', [
            'item' => $item
        ]);
    }
    public function showpersuratan(Request $request, $id)
    {
        $item = ProsesUsulan::findOrFail($id);
        return view('dashboard.user.show.showpersuratan', [
            'item' => $item
        ]);
    }

    public function prosesseketarisdirektur(Request $request, $id)
    {
        $item = ProsesUsulan::findOrFail($id);
        return view('dashboard.user.proses.prosesseketarisdirektur', [
            'item' => $item
        ]);
    }
    public function showseketaris(Request $request, $id)
    {
        $item = ProsesUsulan::findOrFail($id);
        return view('dashboard.user.show.showseketeris', [
            'item' => $item
        ]);
    }
    public function prosesseketarisdirektur2(Request $request, $id)
    {
        $item = ProsesUsulan::findOrFail($id);
        return view('dashboard.user.proses.prosesseketarisdirektur2', [
            'item' => $item
        ]);
    }
    public function prosesdirektur(Request $request, $id)
    {
        $item = ProsesUsulan::findOrFail($id);
        return view('dashboard.user.proses.prosesdirektur', [
            'item' => $item
        ]);
    }
    public function proseswadir(Request $request, $id)
    {
        $item = ProsesUsulan::findOrFail($id);
        return view('dashboard.user.proses.proseswadir', [
            'item' => $item
        ]);
    }
    public function prosesbukpenerbitansk(Request $request, $id)
    {
        $item = ProsesUsulan::findOrFail($id);
        return view('dashboard.user.proses.prosesbukpenerbitansk', [
            'item' => $item
        ]);
    }
    public function proseskoordinator(Request $request, $id)
    {
        $item = ProsesUsulan::findOrFail($id);
        return view('dashboard.user.proses.proseskoordinator', [
            'item' => $item
        ]);
    }
    public function updatedatabuk(Request $request, $id)
    {
        $data = ProsesUsulan::findOrFail($id);
        $this->validate($request, [
            'buk_persuratan' => 'required',
        ]);
        $data = ProsesUsulan::find($id);
        if ($request->file('buk_persuratan')) {
            $data['buk_persuratan'] = $request->file('buk_persuratan')->store('buk_persuratan-file');
        }
        $save = $data->save();
        if ($save) {
            return redirect()->back()->with('success', 'You are now rcreated successfully as datadosen');

        }
        else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to create');
        }
    }
    public function updateseketrisdirektur(Request $request, $id)
    {
        $data = ProsesUsulan::findOrFail($id);
        $this->validate($request, [
            'seketaris_direktur' => 'required',
        ]);
        $data = ProsesUsulan::find($id);
        if ($request->file('seketaris_direktur')) {
            $data['seketaris_direktur'] = $request->file('seketaris_direktur')->store('seketaris_direktur-file');
        }
        $save = $data->save();
        if ($save) {
            return redirect()->back()->with('success', 'You are now rcreated successfully as datadosen');
        }
        else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to create');
        }
    }
    public function updateseketrisdirektur2(Request $request, $id)
    {
        $data = ProsesUsulan::findOrFail($id);
        $this->validate($request, [
            'seketaris_direktur2' => 'required',
        ]);
        $data = ProsesUsulan::find($id);
        if ($request->file('seketaris_direktur2')) {
            $data['seketaris_direktur2'] = $request->file('seketaris_direktur2')->store('seketaris_direktur2-file');
        }
        $save = $data->save();
        if ($save) {
            return redirect()->back()->with('success', 'You are now rcreated successfully as datadosen');

        }
        else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to create');
        }
    }
    public function updatedirektur(Request $request, $id)
    {
        $data = ProsesUsulan::findOrFail($id);
        $this->validate($request, [
            'direktur' => 'required',
        ]);
        $data = ProsesUsulan::find($id);
        if ($request->file('direktur')) {
            $data['direktur'] = $request->file('direktur')->store('direktur-file');
        }
        $save = $data->save();
        if ($save) {
            return redirect()->route('user.home')->with('success', 'You are now rcreated successfully as bukti ACC');

        }
        else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to create');
        }
    }
    public function updatepersuratanSK(Request $request, $id)
    {
        $data = ProsesUsulan::findOrFail($id);
        $this->validate($request, [
            'buk_persuratan_sk' => 'required',
        ]);
        $data = ProsesUsulan::find($id);
        if ($request->file('buk_persuratan_sk')) {
            $data['buk_persuratan_sk'] = $request->file('buk_persuratan_sk')->store('buk_persuratan_sk-file');
        }
        $save = $data->save();
        if ($save) {
            return redirect()->back()->with('success', 'You are now rcreated successfully as datadosen');

        }
        else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to create');
        }
    }

    public function updatewadir(Request $request, $id)
    {
        $data = ProsesUsulan::findOrFail($id);
        $this->validate($request, [
            'wadir2' => 'required',
        ]);
        $data = ProsesUsulan::find($id);
        if ($request->file('wadir2')) {
            $data['wadir2'] = $request->file('wadir2')->store('wadir2-file');
        }
        $save = $data->save();
        if ($save) {
            return redirect()->back()->with('success', 'You are now rcreated successfully as datadosen');

        }
        else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to create');
        }
    }


    public function updatekoordinator(Request $request, $id)
    {
        $data = ProsesUsulan::findOrFail($id);
        $this->validate($request, [
            'koordinator' => 'required',
        ]);
        $data = ProsesUsulan::find($id);
        if ($request->file('koordinator')) {
            $data['koordinator'] = $request->file('koordinator')->store('koordinator-file');
        }
        $save = $data->save();
        if ($save) {
            return redirect()->back()->with('success', 'You are now rcreated successfully as datadosen');

        }
        else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to create');
        }
    }

    public function edit(request $request, $id)
    {
        $item = ProsesUsulan::find($id);
        return response()->json_encode($item);
    // return response()->json($item);
    }


    function check(Request $request)
    {
        //Validate inputs
        $request->validate([
            'nip' => 'required|exists:users,nip',
            'password' => 'required|min:5|max:30'
        ], [
            'nip.exists' => 'This nip is not exists on users table'
        ]);

        $creds = $request->only('nip', 'password');
        if (Auth::guard('web')->attempt($creds)) {
            return redirect()->route('user.home');
        }
        else {
            return redirect()->route('user.login')->with('fail', 'Incorrect credentials');
        }
    }

    public function indexadmin()
    {
        $item = User::all();
        return view('dashboard.admin.user.index', [
            'item' => $item

        ]);
    }


    public function create()
    {
        $item = User::all();
        return view('dashboard.admin.user.create', [
            'item' => $item

        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'password',
            'role' => 'required'
        ]);
        $user = new User();
        $user->name = $request->get('name');
        $user->nip = $request->get('nip');
        $user->password = Hash::make("User123");
        $user->role = $request->get('role');
        $user->save();
        return redirect()->route('admin.user')->with('success', 'Data successfully ditambah');

    }
    public function destroy($id)
    {
        $item = User::findOrfail($id);
        $item->delete();

        return redirect()->route('admin.user');
    }

    function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}