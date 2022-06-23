@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <a class="collapse-item" href="#">Sudah Selesai Diproses</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> </div>
                        </div>
                        <div class="col-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd"
                                    d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                <a class="collapse-item" href="#">Usulan Sedang Proses</a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> </div>
                        </div>
                        <div class="col-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-newspaper" viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                                <path
                                    d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
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
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->nama_unit }}</td>
                            <td> <a href="{{ route('user.show', $item->id) }}"> {{ $item->judul_usulan }} </a>
                            </td>
                            <td>
                                @if($item->buk_persuratan == "0")
                                @if (Auth::user()->role!="BUK PERSURATAN")
                                <a href="#" class="btn btn-warning" data-toggle="modal"
                                    data-target="#hakakses">Proses</a>
                                @else
                                <a href="{{ route('user.prosespersuratan', $item->id) }}"
                                    class=" btn btn-warning">Proses</a>
                                @endif
                                @else
                                <a href="{{ route('user.showpersuratan', $item->id) }}"
                                    class="btn btn-success ">Selesai</a>
                                @endif
                            </td>
                            <td>
                                @if($item->seketaris_direktur == "0")
                                @if (Auth::user()->role!="SEKETERIS DIREKTUR")
                                <a href="#" class="btn btn-warning" data-toggle="modal"
                                    data-target="#hakakses">Proses</a>
                                @else
                                <a href="{{ route('user.prosesseketarisdirektur', $item->id) }}"
                                    class=" btn btn-warning">Proses</a>
                                @endif
                                @else
                                <a href="{{ route('user.showseketaris', $item->id) }}"
                                    class="btn btn-success ">Selesai</a>
                                @endif
                            </td>
                            <td>
                                @if($item->direktur == "0")
                                @if (Auth::user()->role!="DIREKTUR")
                                <a href="#" class="btn btn-warning" data-toggle="modal"
                                    data-target="#hakakses">Proses</a>
                                @else
                                <a href="{{ route('user.prosesdirektur', $item->id) }}"
                                    class=" btn btn-warning">Proses</a>
                                @endif
                                @else
                                <a href="#" class="btn btn-success " data-toggle="modal"
                                    data-target="#sukses">Selesai</a>
                                @endif
                            </td>
                            <td>
                                @if($item->seketaris_direktur2 == "0")
                                @if (Auth::user()->role!="SEKETERIS DIREKTUR")
                                <a href="#" class="btn btn-warning" data-toggle="modal"
                                    data-target="#hakakses">Proses</a>
                                @else
                                <a href="{{ route('user.prosesseketarisdirektur2', $item->id) }}"
                                    class=" btn btn-warning">Proses</a>
                                @endif
                                @else
                                <a href="#" class="btn btn-success " data-toggle="modal"
                                    data-target="#sukses">Selesai</a>
                                @endif
                            </td>
                            <td>
                                @if($item->wadir2 == "0")
                                @if (Auth::user()->role!="WADIR")
                                <a href="#" class="btn btn-warning" data-toggle="modal"
                                    data-target="#hakakses">Proses</a>
                                @else
                                <a href="{{ route('user.proseswadir', $item->id) }}" class=" btn btn-warning">Proses</a>
                                @endif
                                @else
                                <a href="#" class="btn btn-success " data-toggle="modal"
                                    data-target="#sukses">Selesai</a>
                                @endif
                            </td>
                            <td>
                                @if($item->koordinator == "0")
                                @if (Auth::user()->role!="KOORDINATOR")
                                <a href="#" class="btn btn-warning" data-toggle="modal"
                                    data-target="#hakakses">Proses</a>
                                @else
                                <a href="{{ route('user.proseskoordinator', $item->id) }}"
                                    class=" btn btn-warning">Proses</a>
                                @endif
                                @else
                                <a href="#" class="btn btn-success " data-toggle="modal"
                                    data-target="#sukses">Selesai</a>
                                @endif
                            </td>
                            <td>
                                @if($item->buk_persuratan_sk == "0" )
                                @if (Auth::user()->role == "BUK PERSURATAN" && "PENERBITAN SK")
                                <a href="{{ route('user.prosesbukpenerbitansk', $item->id) }}"
                                    class=" btn btn-warning">Proses</a>
                                @else
                                <a href="#" class="btn btn-warning" data-toggle="modal"
                                    data-target="#hakakses">Proses</a>
                                @endif
                                @else
                                <a href="#" class="btn btn-success " data-toggle="modal"
                                    data-target="#sukses">Selesai</a>
                                @endif

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