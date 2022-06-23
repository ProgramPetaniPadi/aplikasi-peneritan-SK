@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Dosen</h1>
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
            <table class="table table-dark">
                <tr>
                    <th>NIP DOSEN</th>
                    <td>{{ $item->nip }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $item->nama }}</td>
                </tr>
                <tr>
                    <th>JENIS KELAMIN</th>
                    <td>{{ $item->jenis_kelamin}}</td>
                </tr>
                <tr>
                    <th>UMUR</th>
                    <td>{{ $item->umur }}</td>
                </tr>
                <tr>
                    <th>JENIS PEKERJAAN</th>
                    <td>{{ $item->pekerjaantendiks->pekerjaan}} </td>
                </tr>
                <tr>
                    <th>NO HP</th>
                    <td>{{ $item->nohp }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $item->alamat }}</td>
                </tr>
                <tr>
                    <th>Poto</th>
                    <td>
                        <img src="../backend/img/profil.jpg" width="200px">
                    </td>
                </tr>
                <tr>
                    <th>SK</th>
                    <td>
                        <img src="../backend/img/sk.PNG" width="200px">
                    </td>
                </tr>

            </table>
            <a href="{{ route('admin.tendik') }}" class="btn btn-danger btn-primary shadow-sm">
                <i class="fa-sm text-white-50"></i> Kembali
            </a>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection