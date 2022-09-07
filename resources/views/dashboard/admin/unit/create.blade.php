@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Unit</h1>
        <a href="{{ route('admin.unit') }}" class="btn btn-danger btn-primary shadow-sm">
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
            <form action="{{ route('admin.store|unit') }}" method="get" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="name">NAMA</label>
                    <input type="text" class="form-control" name="name" placeholder="name" required="required">
                </div>
                <div class="form-group">
                    <label for="phone">NOMOR TELEPON</label>
                    <input type="text" class="form-control" name="phone" placeholder=" No Hp 08......">
                </div>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="nip" class="form-control" name="nip" placeholder="nip" required="required">
                </div>
                <div class="form-group">
                    <label for="jabatan_fungsional">JABATAN FUNGSIONAL</label>
                    <select name="jabatan_fungsional" id="jabatan_fungsional" class="form-control">
                        <option value="">...Pilih Jabatan...</option>
                        <option value="DIREKTUR">DIREKTUR</option>
                        <option value="WADIR"> WADIR</option>
                        <option value="KOORDINATOR">KOORDINATOR</option>
                        <option value="STAFF UMUM">STAFF UMUM</option>
                        <option value="STAFF PRODI">STAFF PRODI</option>
                        <option value="KAP PRODI">KAP PRODI</option>
                    </select>
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