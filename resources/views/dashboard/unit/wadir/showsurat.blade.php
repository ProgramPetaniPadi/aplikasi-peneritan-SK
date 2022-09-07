@extends('layouts.unit')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA Usulan Tugas Beban Mengajar</h1>
        <a href="{{ route('Unit.wadir') }}" class="btn btn-sm btn-warning shadow-sm">
            <i class=" text-white-50"></i> Kembali
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
                        <td align="right"> Sambas, {{ $items->tgl }}

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Lampiran : Usulan Surat Tugas Beban Mengajar Dosen
                            <br>
                            Nomor &nbsp;&nbsp;&nbsp;&nbsp;: {{ $items->nosurattugas }}<br>
                            Prihal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Permohonan surat Tugas Beban
                            Mengajar<br><br><br>

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
                                Bersama ini kami sampaikan Daftar Beban Mengajar Semester {{ $items->semester }}Tahun
                                Akademik {{ $items->tahun_akademik }}
                                Program Studi Manajemen Informatika Politeknik Negeri Sambas,
                                sebagai terlampir. Maka mohon kiranya untuk diterbitkan surat Tugas atas namaDirektur
                                Politeknik Negeti Sambas <br><br>
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
                            Ketua jurusan {{ $items->ketua_jurusan }}<br>
                            @if($items->qr_ketua_jurusan == "1")
                            <img src='../../../qr/ketua_jurusan_.png' width='90px'><br>
                            @endif
                            <u>{{ $items->nama_ketua_jurusan }}</u><br>
                            {{ $items->nip_ketua_jurusan }} <br><br><br><br>


                        </td>

                        <td width="30%">

                        </td>

                        <td>

                            Koord. Prodi {{ $items->koord_prodi }}<br>
                            @if($items->qr_ketua_prodi == "1")
                            <img src='../../../qr/koord-prodi.png' width='90px'><br>
                            @endif
                            <u>{{ $items->nama_koord_prodi }}</u><br>
                            {{ $items->nip_koord_prodi }} <br>

                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>
<!-- /.container-fluid -->
@endsection