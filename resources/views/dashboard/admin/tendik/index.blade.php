@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manajemen Tendik</h1>
        <a href="{{ route('admin.create|tendik') }}" class="btn btn-sm btn-success shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Tendik
        </a>
    </div>


    <div class="card shadow mb-4">
        <div class="card-body">
            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="table-responsive">
                <table class="table table-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NIP</th>
                            <th>NAMA</th>
                            <th>JENIS KELAMIN</th>
                            <th>TANGGAL LAHIR</th>
                            <th>UMUR</th>
                            <th>JENIS PEKERJAAN</th>
                            <th>NO HP</th>
                            <th>ALAMAT</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @forelse ($items as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->nip}}</td>
                            <td>{{ $item->nama}}</td>
                            <td>{{ $item->jenis_kelamin}}</td>
                            <td>{{ $item->tgllahir }}</td>
                            <td>{{ $item->umur}}</td>
                            <td>{{ $item->pekerjaantendiks->pekerjaan}}</td>
                            <td>{{ $item->nohp }}</td>
                            <td>{{ $item->alamat }} </td>
                            <td>
                                <a href="{{ route('admin.edit|tendik', $item->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i></a>
                                <a href="{{ route('admin.show|tendik', $item->id) }}" class="btn btn-warning">
                                    <i class="fa fa-eye"></i> </a>
                                <form action="{{ route('admin.destroy|tendik', $item->id) }}" method="get"
                                    class="d-inline" onclick="return confirm('Yakin ingin menghapus?');">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">
                                Tidak Ada Data
                            </td>
                        </tr>
                        @endforelse



                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection