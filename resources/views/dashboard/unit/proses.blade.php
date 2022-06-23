@extends('layouts.unit')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">PROSES SURAT USULAN</h1>
        <a href="{{ Route('Unit.create') }}" class="btn btn-sm btn-success shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Surat
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
                            <th>NAMA UNIT</th>
                            <th>USULAN SURAT </th>
                            <th>BUK PERSURATAN </th>
                            <th>SEKETARIS DIREKTUR</th>
                            <th>DIREKTUR</th>
                            <th>SEKETARIS DIREKTUR</th>
                            <th>WADIR II</th>
                            <th>KOORDINATOR</th>
                            <th>BUK PERSURATAN / SK</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php 
                        $i = 1;
                        ?>
                        @forelse ($item as $item)


                        @if (Auth::user()->unit==$item->nama_unit)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ Auth::user()->unit }}</td>
                            <td> {{ $item->judul_usulan }}</td>
                            <td>
                                @if($item->buk_persuratan == "0")
                                <a href="#" class="btn btn-warning">Proses</a>
                                @else
                                <a href="#" class="btn btn-success " data-toggle="modal"
                                    data-target="#hakakses">Selesai</a>
                                @endif
                            </td>
                            <td>
                                @if($item->seketaris_direktur == "0")
                                <a href="#" class="btn btn-warning">Proses</a>
                                @else
                                <a href="#" class="btn btn-success align-content-center">Selesai</a>
                                @endif
                            </td>
                            <td>
                                @if($item->direktur == "0")
                                <a href="#" class="btn btn-warning">Proses</a>
                                @else
                                <a href="#" class="btn btn-success align-content-center">Selesai</a>
                                @endif
                            </td>
                            <td>
                                @if($item->seketaris_direktur2 == "0")
                                <a href="#" class="btn btn-warning">Proses</a>
                                @else
                                <a href="#" class="btn btn-success align-content-center">Selesai</a>
                                @endif
                            </td>
                            <td>
                                @if($item->wadir2 == "0")
                                <a href="#" class="btn btn-warning">Proses</a>
                                @else
                                <a href="#" class="btn btn-success align-content-center">Selesai</a>
                                @endif
                            </td>
                            <td>
                                @if($item->koordinator == "0")
                                <a href="#" class="btn btn-warning">Proses</a>
                                @else
                                <a href="#" class="btn btn-success align-content-center">Selesai</a>
                                @endif
                            </td>
                            <td>
                                @if($item->buk_persuratan_sk == "0")
                                <a href="#" class="btn btn-warning">Proses</a>
                                @else
                                <a href="#" class="btn btn-success align-content-center">Selesai</a>
                                @endif
                            </td>
                        </tr>


                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection