@extends('layouts.unit')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA Usulan SK Beban Mengajar</h1>
        <a href="{{ route('Unit.usulansuratsk') }}" class="btn btn-sm btn-warning shadow-sm">
            <i class=" text-white-50"></i> Kembali
        </a>
        <a href="{{ route('Unit.print|suratusulanSKbebanmengajar', $item->id) }}"
            class="btn btn-sm btn-warning shadow-sm" target="_blank">
            <i class=" text-white-50"></i> Print
        </a>
    </div>
    <div class="row">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="col-xl-8 col-lg-8">
            <div class="card shadow">
                <br><br>
                <table border=0 width=100%>
                    <tr style="float : left">
                        <td align="center"><img src='../../images/logo.png' width='85px'></td>
                    </tr>
                    <tr style="float : left">
                        <td align="center">
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
                <table width='80%' align="center">
                    <tr>
                        <td align="right"> Sambas, {{ $item->tgl }}

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nomor &nbsp;&nbsp;&nbsp;&nbsp;: {{ $item->nosurat }}<br>
                            Lampiran : {{ $item->lampiran }}
                            <br>
                            Prihal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Permohonan SK Beban
                            Mengajar <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Program Studi
                            Manajemen Informatika<br><br><br>
                        </td>
                    </tr><br>
                    <tr>
                        <td> Yth. Direktur Politeknik Negeri Sambas </td>
                    </tr>
                    <tr>
                        <td>di-<br><br></td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempat</td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehubung
                                dengan
                                telah Selesainya Proses mengajar semseter {{ $item->semester }} Pilih
                                Tahun Akademik {{ $item->tahun_akademik }} dan selesai Surat Tugas Beban Mengajar Nomor
                                : {{ $item->nosuratlampiran }} Program Studi Manajemen Informatika Jurusan Manajemen
                                Informatika
                                Politeknik Negeri
                                SAMBAS
                                maka dengan ini untuk selanjutnya dapat dikeluarkan sebagai surat keputusan(SK) Direktur
                                Politeknik Negeri Sambas
                                sebagaimana daftar terlampir<br><br>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Demikian Permohonan ini kami sampaikan. Atas perhatiannya kami ucapkan
                            terimakasih.<br><br><br><br><br></td>
                    </tr>
                </table>
                <table width=100% align="center">
                    <tr>
                        <td width="10%"></td>
                        <td>
                            <br>
                            Mengetahui, <br>
                            Ketua jurusan {{ $item->ketua_jurusan }}<br>
                            @if($item->qr_ketua_jurusan == "1")
                            <img src='../../qr/ketua_jurusan_.png' width='90px'><br>
                            @endif
                            <u>{{ $item->nama_ketua_jurusan }}</u><br>
                            {{ $item->nip_ketua_jurusan }}<br><br>
                        </td>
                        <td width="20%">
                        </td>
                        <td>
                            Koord. Prodi {{ $item->koord_prodi }}<br>
                            @if($item->qr_ketua_prodi == "1")
                            <img src='../../qr/koord-prodi.png' width='90px'><br>
                            @endif
                            <u>{{ $item->nama_ketua_prodi }}</u><br>
                            {{ $item->nip_ketua_prodi }} <br>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('Unit.storesuratsk', $item->id) }}" method="get" autocomplete="on">
                        @csrf
                        <div class="form-group">
                            <label for="nosurat">NOMOR SURAT</label>
                            <input type="text" class="form-control" name="nosurat" placeholder="nomor surat"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="lampiran">lampiran</label>
                            <input type="text" class="form-control" name="lampiran" placeholder="lampiran"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="nosuratlampiran">NOMOR SURAT LAMPIRAN </label>
                            <input type="text" class="form-control" name="nosuratlampiran"
                                placeholder="nomor surat lampiran" required="required">
                        </div>
                        <div class="form-group">
                            <label for="tgl">TANGGAL SURAT</label>
                            <input type="date" class="form-control" name="tgl" placeholder="tanggal surat"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="semester">SEMESTER</label>
                            <input type="text" class="form-control" name="semester" placeholder="semester"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="tahun_akademik">TAHUN AKADEMIK </label><br>
                            <select name="tahun_akademik">
                                <option value="">Tahun Kelulusan</option>
                                <?php
                                    $thn_skr = date('Y');
                                    for ($x = $thn_skr; $x >= 2000; $x--) {
                                    ?>
                                <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                <?php
                                    }
                                    ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ketua_jurusan">KETUA JURUSAN</label>
                            <input type="text" class="form-control" name="ketua_jurusan" placeholder="Jurusan "
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="nama_ketua_jurusan">NAMA</label>
                            <input type="text" class="form-control" name="nama_ketua_jurusan"
                                placeholder="nama ketua jurusan" required="required">
                        </div>
                        <div class="form-group">
                            <label for="nip_ketua_jurusan">NIP</label>
                            <input type="text" class="form-control" name="nip_ketua_jurusan"
                                placeholder="nip ketua jurusan" required="required">
                        </div>
                        <div class="form-group">
                            <label for="ketua_prodi">KOORD. PRODI</label>
                            <input type="text" class="form-control" name="ketua_prodi" placeholder="koordinator prodi"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="nama_ketua_prodi">NAMA</label>
                            <input type="text" class="form-control" name="nama_ketua_prodi"
                                placeholder="nama ketua prodi" required="required">
                        </div>
                        <div class="form-group">
                            <label for="nip_ketua_prodi">NIP</label>
                            <input type="text" class="form-control" name="nip_ketua_prodi" placeholder="nip ketua prodi"
                                required="required">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- /.container-fluid -->
@endsection