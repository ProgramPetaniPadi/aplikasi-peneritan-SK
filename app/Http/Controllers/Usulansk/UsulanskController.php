<?php

namespace App\Http\Controllers\Usulansk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usulansk;

class UsulanskController extends Controller
{
    public function storeusulansk(Request $request)
    {
        $request->validate([
            'judul_usulan' => 'required',
            'document' => 'required'

        ]);
        $usulansk = new Usulansk();
        $usulansk->judul_usulan = $request->get('judul_usulan');
        if ($request->file('document')) {
            $usulansk['document'] = $request->file('document')->store('document-file');
        }
        $usulansk->save();
        return redirect()->route('Unit.usulansk')->with('status', 'You are now rcreated successfully as Surat Usulan');


    }

    public function destroy($id)
    {
        $usulansk = Usulansk::findOrfail($id);
        $usulansk->delete();

        return redirect()->route('Unit.usulansk');
    }
}