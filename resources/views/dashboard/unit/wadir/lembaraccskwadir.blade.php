@extends('layouts.unit')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA Usulan Tugas Beban Mengajar</h1>
        <a href="{{ route('Unit.usulanskwadir') }}" class="btn btn-sm btn-warning shadow-sm">
            <i class=" text-white-50"></i> Kembali
        </a>
    </div>


    <div class="col-xl-10 col-lg-10">
        <div class="card shadow">
            <br><br>
            <table border=0 width=100%>
                <tr style="float : left">
                    <td align="center">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <img src='../../images/logo.png' width='120px'>
                    </td>
                </tr>
                <tr style="float : left">
                    <td align="center">
                        <br>
                        <p>KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI <br>
                            <b>POLITEKNIK NEGERI SAMBAS</b><br>
                            Jalan Raya Sejangkung - Sambas, 79462 Kalimantan Barat <br>
                            Telp (0562) 6303000/6303333 Laman : www. poltesa.ac.id Email:info@poltesa.ac.id
                        </p>
                    </td>
                </tr>
                <td>
                    <hr style='border:1px solid #000'>
                </td>
            </table>


            <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <td colspan="4" align="center">LEMBAR DISPOSISI</td>
                    </tr>
                    <tr>
                        <td>NOMOR AGENDA</td>
                        <td>TERIMA TANGGAL</td>
                        <td>TANGGAL SURAT</td>
                        <td>NOMOR SURAT MASUK</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label> DITERUSKAN KEPADA : </label><br>
                            @if ($items->wadir1== "1")
                            <input checked type="checkbox" id="wadir1" name="wadir1" value="1">
                            @else
                            <input type="checkbox" id="wadir1" name="wadir1" value="1">
                            @endif
                            <label for="wadir1"> WAKIL DIREKTUR I</label><br>

                            @if ($items->wadir2== "1")
                            <input checked type="checkbox" id="wadir2" name="wadir2" value="1">
                            @else
                            <input type="checkbox" id="wadir2" name="wadir2" value="1">
                            @endif
                            <label for="wadir2"> WAKIL DIREKTUR II</label><br>
                        </td>
                        <td colspan="2">
                            <br>
                            @if($items->wadir3== "1")
                            <input checked type="checkbox" id="wadir3" name="wadir3" value="1">
                            @else
                            <input type="checkbox" id="wadir3" name="wadir3" value="1">
                            @endif
                            <label for="wadir3"> WAKIL DIREKTUR III</label><br>

                            @if($items->ketuapoltesa== "1")
                            <input checked type="checkbox" id="ketuapoltesa" name="ketuapoltesa" value="1">
                            @else
                            <input type="checkbox" id="ketuapoltesa" name="ketuapoltesa" value="1">
                            @endif
                            <label for="ketuapoltesa"> KETUA POLTESA</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label> DISPOSISI : </label><br>
                            @if($items->untukdiagendakan== "1")
                            <input checked type="checkbox" id="untukdiagendakan" name="untukdiagendakan" value="1">
                            @else
                            <input type="checkbox" id="untukdiagendakan" name="untukdiagendakan" value="1">
                            @endif
                            <label for="untukdiagendakan"> Untuk diagendakan</label><br>

                            @if($items->mohonmenyiapkan== "1")
                            <input checked type="checkbox" id="mohonmenyiapkan" name="mohonmenyiapkan" value="1">
                            @else
                            <input type="checkbox" id="mohonmenyiapkan" name="mohonmenyiapkan" value="1">
                            @endif
                            <label for="mohonmenyiapkan"> Mohon menyiapkan bahan</label><br>

                            @if($items->mohondapatmewakili== "1")
                            <input checked type="checkbox" id="mohondapatmewakili" name="mohondapatmewakili" value="1">
                            @else
                            <input type="checkbox" id="mohondapatmewakili" name="mohondapatmewakili" value="1">
                            @endif
                            <label for="mohondapatmewakili"> Mohon dapat mewakili</label><br>

                            @if($items->mohonmenugaskanperwakilan== "1")
                            <input checked type="checkbox" id="mohonmenugaskanperwakilan"
                                name="mohonmenugaskanperwakilan" value="1">
                            @else
                            <input type="checkbox" id="mohonmenugaskanperwakilan" name="mohonmenugaskanperwakilan"
                                value="1">
                            @endif
                            <label for="mohonmenugaskanperwakilan"> Mohon menugaskan perwakilan</label><br>

                            @if($items->tidakbisahadir== "1")
                            <input checked type="checkbox" id="tidakbisahadir" name="tidakbisahadir" value="1">
                            @else
                            <input type="checkbox" id="tidakbisahadir" name="tidakbisahadir" value="1">
                            @endif
                            <label for="tidakbisahadir"> Tidak bisa hadir/izin</label><br>

                            @if($items->mohonditindaklanjuti== "1")
                            <input checked type="checkbox" id="mohonditindaklanjuti" name="mohonditindaklanjuti"
                                value="1">
                            @else
                            <input type="checkbox" id="mohonditindaklanjuti" name="mohonditindaklanjuti" value="1">
                            @endif
                            <label for="mohonditindaklanjuti"> Mohon ditindak lanjuti sesuai ketentuan</label><br>

                            @if($items->mohondikoordinasikan== "1")
                            <input checked type="checkbox" id="mohondikoordinasikan" name="mohondikoordinasikan"
                                value="1">
                            @else
                            <input type="checkbox" id="mohondikoordinasikan" name="mohondikoordinasikan" value="1">
                            @endif
                            <label for="mohondikoordinasikan"> Mohon dikoordinasikan</label><br>
                        </td>
                        <td colspan="2">
                            <br>
                            @if($items->untukdiketahui== "1")
                            <input checked type="checkbox" id="untukdiketahui" name="untukdiketahui" value="1">
                            @else
                            <input type="checkbox" id="untukdiketahui" name="untukdiketahui" value="1">
                            @endif
                            <label for="untukdiketahui"> Untuk diketahui</label><br>

                            @if($items->mohondipelajari== "1")
                            <input checked type="checkbox" id="mohondipelajari" name="mohondipelajari" value="1">
                            @else
                            <input type="checkbox" id="mohondipelajari" name="mohondipelajari" value="1">
                            @endif
                            <label for="mohondipelajari"> Mohon dipelajari</label><br>

                            @if($items->mohondikonsepjawaban== "1")
                            <input checked type="checkbox" id="mohondikonsepjawaban" name="mohondikonsepjawaban"
                                value="1">
                            @else
                            <input type="checkbox" id="mohondikonsepjawaban" name="mohondikonsepjawaban" value="1">
                            @endif
                            <label for="mohondikonsepjawaban"> Mohon disiapkan konsep jawaban</label><br>

                            @if($items->mohonsaranpertimbangan== "1")
                            <input checked type="checkbox" id="mohonsaranpertimbangan" name="mohonsaranpertimbangan"
                                value="1">
                            @else
                            <input type="checkbox" id="mohonsaranpertimbangan" name="mohonsaranpertimbangan" value="1">
                            @endif
                            <label for="mohonsaranpertimbangan"> Mohon saran pertimbangan</label><br>

                            @if($items->disetujui== "1")
                            <input checked type="checkbox" id="disetujui" name="disetujui" value="1">
                            @else
                            <input type="checkbox" id="disetujui" name="disetujui" value="1">
                            @endif
                            <label for="disetujui"> Disetujui</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" height='50px'><label> catatan : </label><br>
                            <textarea disabled name="catatandirektur" rows="3"
                                cols="100">{{ $items->catatandirektur}}</textarea>
                        </td>
                    </tr>

                    <div class="form-group">
                        @if($items->qrdirektur== "1")
                        <img src='../../../qr/koord-prodi.png' width='90px' style="float : right">
                        @endif
                    </div>
                    <form action="{{ route('Unit.updatelembardisposisiwadirsk', $items->id) }}" method="get">
                        <tr>
                            <td colspan="2">
                                <label>DITERUSKAN KEPADA :</label> <br>
                                @if($items->kepalainternal== "1")
                                <input checked type="checkbox" id="kepalainternal" name="kepalainternal" value="1">
                                @else
                                <input type="checkbox" id="kepalainternal" name="kepalainternal" value="1">
                                @endif
                                <label for="kepalainternal"> KEPALA SATUAN PENGAWAS INTERNAL</label><br>

                                @if($items->ketuaagribisnis== "1")
                                <input checked type="checkbox" id="ketuaagribisnis" name="ketuaagribisnis" value="1">
                                @else
                                <input type="checkbox" id="ketuaagribisnis" name="ketuaagribisnis" value="1">
                                @endif
                                <label for="ketuaagribisnis"> KETUA JURUSAN AGGRIBISNIS</label><br>

                                @if($items->ketuamesin== "1")
                                <input checked type="checkbox">
                                @else
                                <input type="checkbox" id="ketuamesin" name="ketuamesin" value="1">
                                @endif
                                <label for="ketuamesin"> KETUA JURUSAN TEKNIK MESIN</label><br>

                                @if($items->ketuamif== "1")
                                <input checked type="checkbox" id="ketuamif" name="ketuamif" value="1">
                                @else
                                <input type="checkbox" id="ketuamif" name="ketuamif" value="1">
                                @endif
                                <label for="ketuamif"> KETUA JURUSAN MANAJEMEN INFORMATIKA</label><br>

                                @if($items->kap2m== "1")
                                <input checked type="checkbox" id="kap2m" name="kap2m" value="1">
                                @else
                                <input type="checkbox" id="kap2m" name="kap2m" value="1">
                                @endif
                                <label for="kap2m">KA. P2M</label><br>

                                @if($items->kap3m== "1")
                                <input checked type="checkbox" id="kap3m" name="kap3m" value="1">
                                @else
                                <input type="checkbox" id="kap3m" name="kap3m" value="1">
                                @endif
                                <label for="kap3m"> KA. P3M</label><br>

                                @if($items->kauptperawatan== "1")
                                <input checked type="checkbox" id="kauptperawatan" name="kauptperawatan" value="1">
                                @else
                                <input type="checkbox" id="kauptperawatan" name="kauptperawatan" value="1">
                                @endif
                                <label for="kauptperawatan"> KA. UPT PERAWATAN DAN PERBAIKAN</label><br>

                                @if($items->kauptbahasa== "1")
                                <input checked type="checkbox" id="kauptbahasa" name="kauptbahasa" value="1">
                                @else
                                <input type="checkbox" id="kauptbahasa" name="kauptbahasa" value="1">
                                @endif
                                <label for="kauptbahasa"> KA. UPT. BAHASA</label><br>

                                @if($items->kauptperpus== "1")
                                <input checked type="checkbox" id="kauptperpus" name="kauptperpus" value="1">
                                @else
                                <input type="checkbox" id="kauptperpus" name="kauptperpus" value="1">
                                @endif
                                <label for="kauptperpus"> KA UPT. PERPUSTAKAAN</label><br>

                                @if($items->kaupttik== "1")
                                <input checked type="checkbox" id="kaupttik" name="kaupttik" value="1">
                                @else
                                <input type="checkbox" id="kaupttik" name="kaupttik" value="1">
                                @endif
                                <label for="kaupttik"> KA. UPT. TIK</label><br>
                            </td>
                            <td colspan="2">
                                @if($items->koordagribisnis== "1")
                                <input checked type="checkbox" id="koordagribisnis" name="koordagribisnis" value="1">
                                @else
                                <input type="checkbox" id="koordagribisnis" name="koordagribisnis" value="1">
                                @endif
                                <label for="koordagribisnis"> KOORDINATOR AGROBISNIS</label><br>

                                @if($items->koordperikan== "1")
                                <input checked type="checkbox" id="koordperikanan" name="koordperikanan" value="1">
                                @else
                                <input type="checkbox" id="koordperikanan" name="koordperikanan" value="1">
                                @endif
                                <label for="koordperikanan"> KOORDINATOR AGROBISNIS PERIKANAN DAN KELAUTAN</label><br>

                                @if($items->koordpangan== "1")
                                <input checked type="checkbox" id="koordpanganan" name="koordpanganan" value="1">
                                @else
                                <input type="checkbox" id="koordpangan" name="koordpangan" value="1">
                                @endif
                                <label for="koordpangan"> KOORDINATORA AGROINDUSTRI PANGAN</label><br>

                                @if($items->koordwisata== "1")
                                <input checked type="checkbox" id="koordwisata" name="koordwisata" value="1">
                                @else
                                <input type="checkbox" id="koordwisata" name="koordwisata" value="1">
                                @endif
                                <label for="koordwisata"> KOORDINATOR MANAJEMEN BISNIS PARIWISATA</label><br>

                                @if($items->koordimif== "1")
                                <input checked type="checkbox" id="koordimif" name="koordimif" value="1">
                                @else
                                <input type="checkbox" id="koordimif" name="koordimif" value="1">
                                @endif
                                <label for="koordimif"> KOORDINATOR MANAJEMEN INFORMATIKA</label><br>

                                @if($items->koordtm== "1")
                                <input checked type="checkbox" id="koordtm" name="koordtm" value="1">
                                @else
                                <input type="checkbox" id="koordtm" name="koordtm" value="1">
                                @endif
                                <label for="koordtm"> KOORDINATOR TEKNIK MULTIMEDIA</label><br>

                                @if($items->koordakuntansi== "1")
                                <input checked type="checkbox" id="koordakuntansi" name="koordakuntansi" value="1">
                                @else
                                <input type="checkbox" id="koordakuntansi" name="koordakuntansi" value="1">
                                @endif
                                <label for="koordakuntansi"> KOORDINATOR AKUNTANSI KEUANGAN PERUSAHAAN</label><br>

                                @if($items->koordmesin== "1")
                                <input checked type="checkbox" id="koordmesin" name="koordmesin" value="1">
                                @else
                                <input type="checkbox" id="koordmesin" name="koordmesin" value="1">
                                @endif
                                <label for="koordmesin"> KOORDINATOR TEKNIK MESIN</label><br>

                                @if($items->koordpertanian== "1")
                                <input checked type="checkbox" id="koordpertanian" name="koordpertanian" value="1">
                                @else
                                <input type="checkbox" id="koordpertanian" name="koordpertanian" value="1">
                                @endif
                                <label for="koordpertanian"> TEKNIK MESIN PERTANIAN</label><br>

                                @if($items->analisakepegawaianamd== "1")
                                <input checked type="checkbox">
                                @else
                                <input type="checkbox" id="analisakepegawaianamd" name="analisakepegawaianamd"
                                    value="1">
                                @endif
                                <label for="analisakepegawaianamd"> ANALISIS KEPEGAWAIAN AHLI MADYA</label><br>

                                @if($items->kasubbagak== "1")
                                <input checked type="checkbox">
                                @else
                                <input type="checkbox" id="kasubbagak" name="kasubbagak" value="1">
                                @endif
                                <label for="kasubbagak"> KASUBBAG AKADEMIK</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" height='50px'><label> catatan : </label><br>
                                <textarea name="catatanwadir" rows="3" cols="100">{{ $items->catatanwadir}}</textarea>
                            </td>
                        </tr>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </form>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection