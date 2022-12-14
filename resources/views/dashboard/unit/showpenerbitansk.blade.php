@extends('layouts.app')

@section('content')

<!-- Page Heading -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Surat Usulan</h1>
        <a href="{{ route('user.home') }}" class="btn btn-danger btn-primary shadow-sm">
            <i class="fa-sm text-white-20"></i> Kembali
        </a>

        <a href="{{ route('user.prosesbukpenerbitansk', $item->id) }}" class="btn btn-danger btn-primary shadow-sm">
            <i class="fa-sm text-white-20"></i> Edit
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
            <table class="table table-dark">
                <tr>
                    <td><embed type="application/pdf" src="{{ asset('storage/'.$item->buk_persuratan_sk) }}"
                            width="100%" height="650"></td>
                </tr>
            </table>

        </div>
    </div>
</div>

@endsection