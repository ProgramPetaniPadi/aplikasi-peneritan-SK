@extends('layouts.unit')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA Usulan Tugas Beban Mengajar</h1>
        <a href="{{ route('Unit.wadir') }}" class="btn btn-sm btn-warning shadow-sm">
            <i class=" text-white-50"></i> Kembali
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

                <table width='80%' align="center">
                    <tr>
                        <td>
                            Lampiran Usulan Surat Tugas Beban Mengajar Dosen<br>
                            Nomor :{{ $items->nosurat }}<br>
                            Tanggal : <?php echo date("d M Y"); ?><br>

                        </td>
                    </tr><br>
                    <tr>
                        <td align="center">
                            <p>
                            <h6 style='margin-bottom:2px' align=center>BEBAN MENGAJAR DOSEN</h6>
                            <h6 style='margin-bottom:2px' align=center>JURUSAN {{ $items->Jurusan }}</h6>
                            <h6 style='margin-bottom:2px' align=center>PROGRAM STUDI {{ $items->program_studi }}</h6>
                            <h6 style='margin-bottom:2px' align=center>SEMESTER {{ $items->semester }} TAHUN
                                AKADEMIK {{ $items->tahun_akademik }}</h6>
                            </p>
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
$i=1;
                        ?>
                        @forelse ($matakuliah as $matakuliah)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $matakuliah->id_dosen }}</td>
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

                    <table width=100%>
                        <tr>
                            <td>
                                <table>
                                </table><br>
                                Mengetahui, <br>
                                Ketua jurusan {{ $items->ketua_jurusan }}<br>
                                @if($items->qr_ketua_jurusan == "1")
                                <img src='../../qr/ketua_jurusan_.png' width='90px'><br>
                                @endif
                                <u>{{ $items->nama_ketua_jurusan }}</u><br>
                                {{ $items->nip_ketua_jurusan }}


                            </td>

                            <td width="40%">

                            </td>

                            <td>

                                Koord. Prodi {{ $items->koord_prodi }}<br>
                                @if($items->qr_ketua_prodi == "1")
                                <img src='../../qr/koord-prodi.png' width='90px'><br>
                                @endif
                                <u>{{ $items->nama_koord_prodi }}</u><br>
                                {{ $items->nip_koord_prodi }}

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