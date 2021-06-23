@extends('layouts.master')
@section('main')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Data Studio</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{url('studio')}}">Studio</a></li>
                    <li class="breadcrumb-item active">Tambah Data Studio</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        {!! Form::open(['url' => 'studio', 'files' => true, 'id'=>'submitForm']) !!}
            @include('studio.form', ['submitButtonText' => 'Tambah Studio'])
        {!! Form::close() !!}
    </div>
</section>
{{-- <div id="studio">
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h1 class="panel-title text-center">Tambah Data Studio</h1>
        </div>
        
    </div>
</div> --}}

@endsection