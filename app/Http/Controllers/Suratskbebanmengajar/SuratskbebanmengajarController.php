<?php

namespace App\Http\Controllers\Suratskbebanmengajar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\suratskbebanmengajar;

class SuratskbebanmengajarController extends Controller
{
    public function storesuratsk(Request $request, $id)
    {
        $item = suratskbebanmengajar::findOrFail($id);
        $this->validate($request, [

            'nosurat' => 'required',
            'lampiran' => 'required',
            'nosuratlampiran' => 'required',
            'tgl' => 'required',
            'semester' => 'required',
            'tahun_akademik' => 'required',
            'ketua_jurusan' => 'required',
            'nama_ketua_jurusan' => 'required',
            'nip_ketua_jurusan' => 'required',
            'ketua_prodi' => 'required',
            'nama_ketua_prodi' => 'required',
            'nip_ketua_prodi' => 'required',
        ]);
        $item = suratskbebanmengajar::find($id);
        $item->nosurat = $request->get('nosurat');
        $item->lampiran = $request->get('lampiran');
        $item->tgl = $request->get('tgl');
        $item->semester = $request->get('semester');
        $item->tahun_akademik = $request->get('tahun_akademik');
        $item->ketua_jurusan = $request->get('ketua_jurusan');
        $item->nama_ketua_jurusan = $request->get('nama_ketua_jurusan');
        $item->nip_ketua_jurusan = $request->get('nip_ketua_jurusan');
        $item->ketua_prodi = $request->get('ketua_prodi');
        $item->nama_ketua_prodi = $request->get('nama_ketua_prodi');
        $item->nip_ketua_prodi = $request->get('nip_ketua_prodi');

        $item->save();
        return redirect()->route('Unit.usulansuratsk')->with('status', 'Data successfully ditabah');
    }
    public function storeusulansk(Request $request)
    {
        $request->validate([
            'judul_usulan' => 'required',
            'document' => 'required'

        ]);
        $item = new suratskbebanmengajar();
        $item->judul_usulan = $request->get('judul_usulan');
        if ($request->file('document')) {
            $item['document'] = $request->file('document')->store('document-file');
        }
        $item->save();
        return redirect()->route('Unit.usulansk')->with('status', 'You are now rcreated successfully as Surat Usulan');
    }

    public function destroy($id)
    {
        $item = suratskbebanmengajar::findOrfail($id);
        $item->delete();

        return redirect()->route('Unit.usulansk');
    }
    public function disposisi(Request $request, $id)
    {
        $items = suratskbebanmengajar::findOrFail($id);
        $this->validate($request, [
            'qr_ketua_jurusan',
            'qr_ketua_prodi',
        ]);
        $items = suratskbebanmengajar::find($id);
        $items->qr_ketua_jurusan = $request->get('qr_ketua_jurusan');
        $items->qr_ketua_prodi = $request->get('qr_ketua_prodi');
        $items->save();
        return redirect()->route('Unit.usulansk')->with('status', 'Data successfully ditabah');
    }

    public function updatelembardisposisi(Request $request, $id)
    {
        $items = suratskbebanmengajar::findOrFail($id);
        $this->validate($request, [
            'wadir1', 'wadir2', 'wadir3', 'ketuapoltesa', 'untukdiagendakan',
            'mohonmenyiapkan', 'mohondapatmewakili', 'mohonmenugaskanperwakilan',
            'tidakbisahadir', 'mohonditindaklanjuti', 'mohondikoordinasikan',
            'untukdiketahui', 'mohondipelajari', 'mohondikonsepjawaban',
            'mohonsaranpertimbangan', 'disetujui', 'catatandirektur', 'qrdirektur',

        ]);
        $items = suratskbebanmengajar::find($id);
        $items->wadir1 = $request->get('wadir1');
        $items->wadir2 = $request->get('wadir2');
        $items->wadir3 = $request->get('wadir3');
        $items->ketuapoltesa = $request->get('ketuapoltesa');
        $items->untukdiagendakan = $request->get('untukdiagendakan');
        $items->mohonmenyiapkan = $request->get('mohonmenyiapkan');
        $items->mohondapatmewakili = $request->get('mohondapatmewakili');
        $items->mohonmenugaskanperwakilan = $request->get('mohonmenugaskanperwakilan');
        $items->tidakbisahadir = $request->get('tidakbisahadir');
        $items->mohonditindaklanjuti = $request->get('mohonditindaklanjuti');
        $items->mohondikoordinasikan = $request->get('mohondikoordinasikan');
        $items->untukdiketahui = $request->get('untukdiketahui');
        $items->mohondipelajari = $request->get('mohondipelajari');
        $items->mohondikonsepjawaban = $request->get('mohondikonsepjawaban');
        $items->mohonsaranpertimbangan = $request->get('mohonsaranpertimbangan');
        $items->disetujui = $request->get('disetujui');
        $items->catatandirektur = $request->get('catatandirektur');
        $items->qrdirektur = $request->get('qrdirektur');

        $items->save();
        return redirect()->route('Unit.usulanskdirektur')->with('status', 'Data successfully ditabah');
    }
    public function updatelembardisposisiwadir(Request $request, $id)
    {
        $items = suratskbebanmengajar::findOrFail($id);
        $this->validate($request, [

            'kepalainternal', 'ketuaagribisnis', 'ketuamesin', 'ketuamif',
            'kap2m', 'kap3m', 'kauptperawatan', 'kauptbahasa', 'kauptperpus',
            'kaupttik', 'koordagribisnis', 'koordperikanan', 'koordpangan', 'koordwisata',
            'koordimif', 'koordtm', 'koordakuntansi', 'koordmesin', 'koordpertanian',
            'analisakepegawaianamd', 'kasubbagak', 'catatanwadir',

        ]);
        $items = suratskbebanmengajar::find($id);

        $items->kepalainternal = $request->get('kepalainternal');
        $items->ketuaagribisnis = $request->get('ketuaagribisnis');
        $items->ketuamesin = $request->get('ketuamesin');
        $items->ketuamif = $request->get('ketuamif');
        $items->kap2m = $request->get('kap2m');
        $items->kap3m = $request->get('kap3m');
        $items->kauptperawatan = $request->get('kauptperawatan');
        $items->kauptbahasa = $request->get('kauptbahasa');
        $items->kauptperpus = $request->get('kauptperpus');
        $items->kaupttik = $request->get('kaupttik');
        $items->koordagribisnis = $request->get('koordagribisnis');
        $items->koordperikanan = $request->get('koordperikanan');
        $items->koordpangan = $request->get('koordpangan');
        $items->koordwisata = $request->get('koordwisata');
        $items->koordimif = $request->get('koordimif');
        $items->koordtm = $request->get('koordtm');
        $items->koordakuntansi = $request->get('koordakuntansi');
        $items->koordmesin = $request->get('koordmesin');
        $items->koordpertanian = $request->get('koordpertanian');
        $items->analisakepegawaianamd = $request->get('analisakepegawaianamd');
        $items->kasubbagak = $request->get('kasubbagak');
        $items->catatanwadir = $request->get('catatanwadir');

        $items->save();
        return redirect()->route('Unit.usulanskwadir')->with('status', 'Data successfully ditabah');
    }
}