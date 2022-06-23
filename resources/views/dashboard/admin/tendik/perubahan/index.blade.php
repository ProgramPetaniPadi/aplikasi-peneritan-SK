@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

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
                            <th>NAMA</th>
                            <th>NIP</th>
                            <th>JUMLAH ANAK AWAL </th>
                            <th>JUMLAH ANAK PERUBAHAN</th>
                            <th>AKTA ANAK </th>
                            <th>KARTU KELUARGA TERBARU </th>
                            <th>AKSI</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @forelse ($item as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nip}}</td>
                            <td>{{ $item->jumlah_anak_awal}}</td>
                            <td>{{ $item->jumlah_anak_perubahan}}</td>
                            <td> <embed type="application/pdf" src="{{ asset('storage/'.$item->akta) }}" width="150"
                                    height="100"></embed></td>
                            <td>
                                <embed type="application/pdf" src="{{ asset('storage/'.$item->kk) }}" width="150"
                                    height="100"></embed>
                            </td>
                            <td>
                                <form action="{{ route('admin.destroyperubahan|tendik', $item->id) }}" method="get"
                                    class="d-inline" onclick="return confirm('Apakah Data Sudah Diproses?');">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-success">
                                        Sudah Diproses
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