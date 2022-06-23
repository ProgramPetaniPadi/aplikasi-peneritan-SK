@extends('layouts.tendik')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
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

        <div class="card shadow">
            <div class="card-body">
                <tr>
                    <td>
                        <img src="../backend/img/profil.jpg" width="200px">
                    </td>
                </tr>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>NIP Tendik</th>
                            <td>{{ Auth::guard('Tendik')->user()->nip }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>{{ Auth::guard('Tendik')->user()->nama }}</td>
                        </tr>
                        <tr>
                            <th>JENIS KELAMIN</th>
                            <td>{{Auth::guard('Tendik')->user()->jenis_kelamin}}</td>

                        </tr>
                        <tr>
                            <th>UMUR</th>
                            <td>{{ Auth::guard('Tendik')->user()->umur }}</td>
                        </tr>
                        <tr>
                            <th>JENIS PEKERJAAN</th>
                            <td>{{ Auth::guard('Tendik')->user()->pekerjaantendiks->pekerjaan }} </td>
                        </tr>
                        <tr>
                            <th>NO HP</th>
                            <td>{{ Auth::guard('Tendik')->user()->nohp }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ Auth::guard('Tendik')->user()->alamat }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection