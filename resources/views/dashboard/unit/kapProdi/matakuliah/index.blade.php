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
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>matakuliah</th>
                            <th>semester_kelas</th>
                            <th>sks_t-p</th>
                            <th>jamMK</th>
                            <th>kelas</th>
                            <th>totalSKS</th>
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
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('Unit.storematakuliah') }}" method="get" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="id_dosen">NAMA DOSEN PENGAJAR</label>
                            <select name="id_dosen" id="id_dosen" class="form-control" required="required">
                                <option value="">...Pilih DOSEN...</option>
                                @foreach($datadosen as $datadosen)
                                <option value="{{ $datadosen->id }}">
                                    {{ $datadosen->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mata_kuliah">MATA KULIAH</label>
                            <input type="text" class="form-control" name="mata_kuliah" placeholder="nama"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="semester_kelas">SEMESTER / KELAS</label>
                            <input type="text" class="form-control" name="semester_kelas" placeholder="nama"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="sks_t_p">SKS T-P</label>
                            <input type="text" class="form-control" name="sks_t_p" placeholder="nama"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="jamMK">JAM MK</label>
                            <input type="text" class="form-control" name="jamMK" placeholder="nama" required="required">
                        </div>
                        <div class="form-group">
                            <label for="kelas">KELAS</label>
                            <input type="text" class="form-control" name="kelas" placeholder="nama" required="required">
                        </div>
                        <div class="form-group">
                            <label for="totalSKS">TOTAL SKS</label>
                            <input type="text" class="form-control" name="totalSKS" placeholder="nama"
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