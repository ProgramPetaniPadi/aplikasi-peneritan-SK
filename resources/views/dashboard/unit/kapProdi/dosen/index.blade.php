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

        <div class="col-xl-4 col-lg-4">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>NO</th>
                            <th>NAMA</th>
                        </tr>
                        <?php 
                        $i = 1;
                        ?>
                        @forelse ($datadosen as $datadosen)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $datadosen->nama }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('Unit.storedatadosen') }}" method="get" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="nama">NAMA</label>
                            <input type="text" class="form-control" name="nama" placeholder="nama" required="required">
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