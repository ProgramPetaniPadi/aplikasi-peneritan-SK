@extends('layouts.tendik')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Perubahan Data</h1>
        <a href="{{ route('Tendik.create|perubahan') }}" class="btn btn-sm btn-success shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Pengajuan perubahan
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
                            <th>NAMA</th>
                            <th>NIP</th>
                            <th>JUMLAH ANAK AWAL </th>
                            <th>JUMLAH ANAK PERUBAHAN</th>
                            <th>AKTA ANAK </th>
                            <th>KARTU KELUARGA TERBARU </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @forelse ($item as $item)

                        <tr>
                            @if (Auth::guard('Tendik')->user()->nip==$item->nip)
                            <td>{{ $i++ }}</td>
                            <td>{{ Auth::guard('Tendik')->user()->nama }}</td>
                            <td>{{ $item->nip}}</td>
                            <td>{{ $item->jumlah_anak_awal}}</td>
                            <td>{{ $item->jumlah_anak_perubahan}}</td>
                            <td> <embed type="application/pdf" src="{{ asset('storage/'.$item->akta) }}" width="250"
                                    height="100"></embed></td>
                            <td>
                                <embed type="application/pdf" src="{{ asset('storage/'.$item->kk) }}" width="250"
                                    height="100"></embed>
                            </td>
                            @endif
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