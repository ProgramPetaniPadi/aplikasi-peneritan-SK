@extends('layouts.unit')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-dark" id="dataTable" width="100%" cellspacing="0">
                    <embed type="application/pdf" src="{{ asset('storage/'.$item->document) }}" width="250"
                        height="100"></embed>
                </table>
            </div>

        </div>
    </div>

</div>

@endsection