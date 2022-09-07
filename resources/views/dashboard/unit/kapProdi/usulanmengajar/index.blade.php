@extends('layouts.unit')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA Usulan Tugas Beban Mengajar</h1>
        <a href="{{ route('Unit.kapprodiproses') }}" class="btn btn-sm btn-warning shadow-sm">
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

                <table width='80%' align="center">
                    <tr>
                        <td>
                            @forelse ($items as $items)
                            @endforeach
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

                    <table width=100%>
                        <tr>
                            <td>
                                <table>
                                </table><br>
                                Mengetahui, <br>
                                Ketua jurusan {{ $items->ketua_jurusan }}<br><br><br><br>


                                <u>{{ $items->nama_ketua_jurusan }}</u><br>
                                {{ $items->nip_ketua_jurusan }}


                            </td>

                            <td width="40%">

                            </td>

                            <td>

                                Koord. Prodi {{ $items->koord_prodi }}<br><br><br><br>

                                <u>{{ $items->nama_koord_prodi }}</u><br>
                                {{ $items->nip_koord_prodi }}

                            </td>

                        </tr>
                    </table>

                </div>
            </div>
        </div>


        <div class="col-xl-4 col-lg-4">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('Unit.storepembagianmatakuliah') }}" method="get" autocomplete="on">
                        @csrf
                        <div class="form-group">
                            <label for="nosurat">NOMOR SURAT</label>
                            <input type="text" class="form-control" name="nosurat" placeholder="nama"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="Jurusan">JURUSAN</label>
                            <input type="text" class="form-control" name="Jurusan" placeholder="nama"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="program_studi">PROGRAM STUDI</label>
                            <input type="text" class="form-control" name="program_studi" placeholder="nama"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="semester">SEMESTER</label>
                            <input type="text" class="form-control" name="semester" placeholder="nama"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="tahun_akademik">TAHUN AKADEMIK</label>

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

                        <div class="card-body">
                            <div class="form-group">
                                <label for="ketua_jurusan">KETUA JURUSAN</label>
                                <input type="text" class="form-control" name="ketua_jurusan" placeholder="nama"
                                    required="required">
                            </div>
                            <div class="form-group">
                                <label for="nama_ketua_jurusan">NAMA</label>
                                <input type="text" class="form-control" name="nama_ketua_jurusan" placeholder="nama"
                                    required="required">
                            </div>
                            <div class="form-group">
                                <label for="nip_ketua_jurusan">NIP</label>
                                <input type="text" class="form-control" name="nip_ketua_jurusan" placeholder="nama"
                                    required="required">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="koord_prodi">KOORD. PRODI</label>
                                <input type="text" class="form-control" name="koord_prodi" placeholder="nama"
                                    required="required">
                            </div>
                            <div class="form-group">
                                <label for="nama_koord_prodi">NAMA</label>
                                <input type="text" class="form-control" name="nama_koord_prodi" placeholder="nama"
                                    required="required">
                            </div>
                            <div class="form-group">
                                <label for="nip_koord_prodi">NIP</label>
                                <input type="text" class="form-control" name="nip_koord_prodi" placeholder="nama"
                                    required="required">
                            </div>
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