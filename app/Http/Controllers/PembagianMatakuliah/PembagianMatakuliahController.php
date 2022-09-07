<?php

namespace App\Http\Controllers\PembagianMatakuliah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PembagianMatakuliah;

class PembagianMatakuliahController extends Controller
{
    public function storepembagianmatakuliah(Request $request)
    {
        $request->validate([
            'nosurat' => 'required',
            'Jurusan' => 'required',
            'program_studi' => 'required',
            'semester' => 'required',
            'tahun_akademik' => 'required',
            'ketua_jurusan' => 'required',
            'nama_ketua_jurusan' => 'required',
            'nip_ketua_jurusan' => 'required',
            'koord_prodi' => 'required',
            'nama_koord_prodi' => 'required',
            'nip_koord_prodi' => 'required',
            'nomorsurattugas'
        ]);
        $PembagianMatakuliah = new PembagianMatakuliah();
        $PembagianMatakuliah->nosurat = $request->get('nosurat');
        $PembagianMatakuliah->Jurusan = $request->get('Jurusan');
        $PembagianMatakuliah->program_studi = $request->get('program_studi');
        $PembagianMatakuliah->semester = $request->get('semester');
        $PembagianMatakuliah->tahun_akademik = $request->get('tahun_akademik');
        $PembagianMatakuliah->ketua_jurusan = $request->get('ketua_jurusan');
        $PembagianMatakuliah->nama_ketua_jurusan = $request->get('nama_ketua_jurusan');
        $PembagianMatakuliah->nip_ketua_jurusan = $request->get('nip_ketua_jurusan');
        $PembagianMatakuliah->koord_prodi = $request->get('koord_prodi');
        $PembagianMatakuliah->nama_koord_prodi = $request->get('nama_koord_prodi');
        $PembagianMatakuliah->nip_koord_prodi = $request->get('nip_koord_prodi');
        $PembagianMatakuliah->nomorsurattugas = '1';

        $PembagianMatakuliah->save();
        return redirect()->route('Unit.usulanmengajar')->with('status', 'Data successfully ditabah');
    }
    public function disposisi(Request $request, $id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $this->validate($request, [
            'qr_ketua_jurusan',
            'qr_ketua_prodi',
        ]);
        $items = PembagianMatakuliah::find($id);
        $items->qr_ketua_jurusan = $request->get('qr_ketua_jurusan');
        $items->qr_ketua_prodi = $request->get('qr_ketua_prodi');
        $items->save();
        return redirect()->route('Unit.kapprodiproses')->with('status', 'Data successfully ditabah');
    }
    public function nosurattugas(Request $request, $id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $this->validate($request, [
            'nosurattugas',
        ]);
        $items = PembagianMatakuliah::find($id);
        $items->nosurattugas = $request->get('nosurattugas');
        $items->save();
        return redirect()->route('Unit.usulanmengajarstaff')->with('status', 'Data successfully ditabah');
    }
    public function updatelembardisposisi(Request $request, $id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $this->validate($request, [
            'wadir1', 'wadir2', 'wadir3', 'ketuapoltesa', 'untukdiagendakan',
            'mohonmenyiapkan', 'mohondapatmewakili', 'mohonmenugaskanperwakilan',
            'tidakbisahadir', 'mohonditindaklanjuti', 'mohondikoordinasikan',
            'untukdiketahui', 'mohondipelajari', 'mohondikonsepjawaban',
            'mohonsaranpertimbangan', 'disetujui', 'catatandirektur', 'qrdirektur',

        ]);
        $items = PembagianMatakuliah::find($id);
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
        return redirect()->route('Unit.direktur')->with('status', 'Data successfully ditabah');
    }

    public function updatelembardisposisiwadir(Request $request, $id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $this->validate($request, [

            'kepalainternal', 'ketuaagribisnis', 'ketuamesin', 'ketuamif',
            'kap2m', 'kap3m', 'kauptperawatan', 'kauptbahasa', 'kauptperpus',
            'kaupttik', 'koordagribisnis', 'koordperikanan', 'koordpangan', 'koordwisata',
            'koordimif', 'koordtm', 'koordakuntansi', 'koordmesin', 'koordpertanian',
            'analisakepegawaianamd', 'kasubbagak', 'catatanwadir',

        ]);
        $items = PembagianMatakuliah::find($id);

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
        return redirect()->route('Unit.wadir')->with('status', 'Data successfully ditabah');
    }

    public function surattugas(Request $request, $id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $this->validate($request, [
            'nomorsurattugas',
            'nama_direktur',
            'nip_direktur'
        ]);
        $items = PembagianMatakuliah::find($id);
        $items->nomorsurattugas = $request->get('nomorsurattugas');
        $items->nama_direktur = $request->get('nama_direktur');
        $items->nip_direktur = $request->get('nip_direktur');
        $items->save();
        return redirect()->route('admin.usulansurat')->with('status', 'Data successfully ditabah');
    }

    public function disposisidirektur(Request $request, $id)
    {
        $items = PembagianMatakuliah::findOrFail($id);
        $this->validate($request, [
            'ttddirektur',
        ]);
        $items = PembagianMatakuliah::find($id);
        $items->ttddirektur = $request->get('ttddirektur');
        $items->save();
        return redirect()->route('Unit.direktur')->with('status', 'Data successfully ditabah');
    }
}