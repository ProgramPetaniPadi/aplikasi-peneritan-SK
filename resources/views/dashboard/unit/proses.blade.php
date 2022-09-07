@extends('layouts.unit')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">PROSES SURAT USULAN</h1>
        <div class="dropdown">
            <button class="btn btn-sm btn-success shadow-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tambah Surat Usulan
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <button type="button" class="dropdown-item"> <a class="btn btn-success"
                        href="{{ route('Unit.printsurat') }}">Beban
                        Mengajar</a></button>
                <button type="button" class="dropdown-item"> <a class="btn btn-success"
                        href="{{ Route('Unit.create') }}">surat usulan lainnya</a></button>
                <button type="button" class="dropdown-item"> <a class="btn btn-success"
                        href="{{ Route('Unit.create') }}">Beban
                        Mengajar</a></button>
            </div>
        </div>
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
                            <th>DOCUMENT SK</th>
                            <th>ACTION</th>
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
                                @if($item->documentSK == "0")
                                <a href="#" class="btn btn-warning">Proses</a>
                                @else
                                <a href="{{ route('Unit.showpenerbitsk', $item->id) }}"
                                    class="btn btn-success ">Selesai</a>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('Unit.destroy', $item->id) }}" method="get" class="d-inline"
                                    onclick="return confirm('Yakin ingin menghapus?');">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
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