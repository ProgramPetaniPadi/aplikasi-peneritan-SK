@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DATA Usulan Tugas Beban Mengajar</h1>
        <a href="{{ route('admin.usulanskbebanmengajar') }}" class="btn btn-sm btn-warning shadow-sm">
            <i class=" text-white-50"></i> Kembali
        </a>
    </div>
    <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="col-xl-8 col-lg-8">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-dark">
                        <tr>
                            <td><embed type="application/pdf" src="{{ asset('storage/'.$item->document) }}" width="100%"
                                    height="650"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /.container-fluid -->
@endsection