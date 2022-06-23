@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Keluarga</h1>
        <a href="{{ route('admin.Keluargadosen') }}" class="btn btn-danger btn-primary shadow-sm">
            <i class="fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.store|Keluargadosen') }}" method="get" autocomplete="on">
                @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="nip" class="col-sm-2 col-sm-2 control-label">NAMA DOSEN</label>
                        <select name="nip" id="nip" class="form-control" required="required">
                            <option value="">...Pilih Nip Dosen...</option>
                            @foreach($dosen as $dosen)
                            <option value=" {{ $dosen->nip }}">
                                {{ $dosen->nip }} | {{ $dosen->nama  }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="suamiistri">NAMA SUAMI ATAU ISTRI </label>
                        <input type="text" class="form-control" name="suamiistri" placeholder="nama suamai atau istri"
                            required="required">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_anak">JUMLAH ANAK</label>
                        <input type="text" class="form-control" name="jumlah_anak" placeholder="Jumlah Anak"
                            required="required">
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </div>
            </form>


        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection