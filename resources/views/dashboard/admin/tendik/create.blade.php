@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Tendik</h1>
        <a href="{{ route('admin.tendik') }}" class="btn btn-danger btn-primary shadow-sm">
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
            <form action="{{ route('admin.store|tendik') }}" method="get" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="int" class="form-control" name="nip" placeholder="NIP" required="required">
                </div>
                <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" class="form-control" name="nama" placeholder="NAMA" required="required">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin" class="col-sm-2 col-sm-2 control-label">JENIS KELAMIN</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required="required">
                        <option value="">----- Pilih Jenis Kelamin -----</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tgllahir">TANGGAL LAHIR</label>
                    <input type="date" class="form-control" name="tgllahir" required="required">
                </div>
                <div class="form-group">
                    <label for="umur">UMUR</label>
                    <input type="text" class="form-control" name="umur" placeholder="UMUR" required="required">
                </div>
                <div class="form-group">
                    <label for="id_perkerjaan" class="col-sm-2 col-sm-2 control-label">JENIS PEKERJAAN</label>
                    <select name="id_pekerjaan" id="id_pekerjaan" class="form-control" required="required">
                        <option value="">....Pilih Jenis Pekerjaan...</option>
                        @foreach($pekerjaan as $pekerjaan)
                        <option value="{{ $pekerjaan->id }}">
                            {{ $pekerjaan->pekerjaan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nohp">NOMOR HP</label>
                    <input type="text" class="form-control" name="nohp">
                </div>
                <div class="form-group">
                    <label for="alamat">ALAMAT</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>


        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection