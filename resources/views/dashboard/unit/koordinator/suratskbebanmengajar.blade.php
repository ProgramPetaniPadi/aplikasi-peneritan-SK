@extends('layouts.unit')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA Usulan Tugas Beban Mengajar</h1>
        <a href="{{ route('Unit.usulansuratsk') }}" class="btn btn-sm btn-warning shadow-sm">
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
                        <td align="center"><img src='../images/logo.png' width='85px'></td>
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
                @forelse ($items as $items)
                @endforeach
                <table width='80%' align="center">
                    <tr>
                        <td align="right"> Sambas, {{ $items->tgl }}

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nomor &nbsp;&nbsp;&nbsp;&nbsp;: {{ $items->nosurat }}<br>
                            Lampiran : {{ $items->lampiran }}
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
                                telah Selesainya Proses mengajar semseter {{ $items->semester }} Pilih
                                Tahun Akademik {{ $items->tahun_akademik }} dan selesai Surat Tugas Beban Mengajar Nomor
                                : {{ $items->nosuratlampiran }} Program Studi Manajemen Informatika Jurusan Manajemen
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
                            Ketua jurusan {{ $items->ketua_jurusan }}<br><br><br><br>


                            <u>{{ $items->nama_ketua_jurusan }}</u><br>
                            {{ $items->nip_ketua_jurusan }} <br><br><br><br>


                        </td>

                        <td width="30%">

                        </td>

                        <td>

                            Koord. Prodi {{ $items->ketua_prodi }}<br><br><br><br>

                            <u>{{ $items->nama_ketua_prodi }}</u><br>
                            {{ $items->nip_ketua_prodi }} <br>

                        </td>
                    </tr>
                </table>
            </div>
        </div>


    </div>
</div>
<!-- /.container-fluid -->
@endsection