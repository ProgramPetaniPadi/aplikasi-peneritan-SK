@extends('layouts.unit')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA Usulan Tugas Beban Mengajar</h1>
        <a href="{{ route('Unit.kapprodiproses') }}" class="btn btn-sm btn-warning shadow-sm">
            <i class=" text-white-50"></i> Kembali
        </a>
        <a href="{{ route('Unit.print|suratSKbebanmengajar', $items->id) }}" class="btn btn-sm btn-warning shadow-sm"
            target="_blank">
            <i class=" text-white-50"></i> Print
        </a>
    </div>
    <div class="row">
        <div class="col-xl-8 col-lg-8">
            <div class="card shadow">
                <br>
                <table border=0 width=100%>

                    <tr style="float : left">
                        <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='../../images/logo.png'
                                width='120px'></td>
                    </tr>
                    <tr style="float : left">
                        <td align="center">
                            <p><br>KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI <br>
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

                <table width="100%">
                    <tr>
                        <td align="center">
                            <h6 style='margin-bottom:2px' align=center><b><u>SURAT TUGAS</u></b></h6>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <p>Nomor:{{ $items->nomorsurattugas}}</p>
                        </td>
                    </tr>
                </table>

                <table width='80%' align="center">
                    <tr>
                        <td>
                            Dasar &nbsp;&nbsp;&nbsp;&nbsp; : 1. Surat Jurusan Manajemen Informatika Nomor :
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            {{ $items->nosurattugas }}, tanggal 31 Agustus 2021 tentang Usulan
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Surat Tugas Beban Mengajar Dosen Program Studi Manajemen Informatika;
                        </td>
                    </tr>
                    <tr>
                        <td><br> Direktur Politeknik Negeri Sambas :</td>
                    </tr>

                    <tr>
                        <td align="center">
                            <h6 style='margin-bottom:-5px' align=center><b><u>MENUGASKAN KEPADA</u></b></h6><br>
                        </td>
                    </tr>
                </table>

                <div class="card-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th rowspan="2">NO</th>
                            <th rowspan="2">Nama Dosen Pengajar</th>
                            <th rowspan="2">Mata Kuliah</th>
                            <th rowspan="2">Semester / Kelas</th>
                            <th colspan="3">Jumlah</th>
                            <th rowspan="2">Jumlah SKS</th>
                        </tr>
                        <tr>
                            <td>SKS (T-P)</td>
                            <td>Jam MK</td>
                            <td>Kelas</td>
                        </tr>
                        <?php
$i = 1;
?>
                        @forelse ($matakuliah as $matakuliah)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $matakuliah->datadosen->nama }}</td>
                            <td>{{ $matakuliah->mata_kuliah }}</td>
                            <td>{{ $matakuliah->semester_kelas }}</td>
                            <td>{{ $matakuliah->sks_t_p }}</td>
                            <td>{{ $matakuliah->jamMK }}</td>
                            <td>{{ $matakuliah->kelas }}</td>
                            <td>{{ $matakuliah->totalSKS }}</td>
                        </tr>
                        @empty
                        @endforelse
                        <tr>
                            <th colspan="8">total</th>
                        </tr>

                        <!-- <div class="form-group">
                            <button type="botton" class="btn btn-success"><a href="{{ route('Unit.printsurat') }} "
                                    target='_blank'>Print</a></button>
                        </div> -->
                    </table>
                    <table width='80%' align="center">
                        <tr>
                            <td>Untuk :</td>
                        </tr>
                        <tr>
                            <td>
                                1. Sebagai Dosen Pengampun Matakuliah Semester {{ $items->semester }} Tahun Akademik
                                {{ $items->tahun_akademik }} <br>
                                &nbsp;&nbsp;&nbsp;&nbsp; Prodi D-III {{ $items->program_studi }} Jurusan
                                {{ $items->Jurusan }}<br><br><br>
                            </td>
                        </tr><br>
                        <tr>
                            <td align="center">

                            </td>
                        </tr>
                    </table>
                    <table width=100%>
                        <tr>
                            <td width="70%">

                            </td>

                            <td>
                                Sambas, <?php echo date("d M Y"); ?><br>
                                Direktur<br>
                                @if($items->ttddirektur == "1")
                                <img src='../../qr/direktur.png' width='90px'><br>
                                @endif
                                <u>{{ $items->nama_direktur }}</u><br>
                                {{ $items->nip_direktur }}

                            </td>

                        </tr>
                    </table>

                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->
@endsection