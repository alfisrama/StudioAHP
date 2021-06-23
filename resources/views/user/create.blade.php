@extends('layouts.master')
@section('main')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Data User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{url('user')}}">User</a></li>
                    <li class="breadcrumb-item active">Tambah Data User</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        {!! Form::open(['url' => 'user', 'files' => true]) !!}
            @include('user.form', ['submitButtonText' => 'Tambah User', 'id'=>'submitForm'])
        {!! Form::close() !!}
    </div>
</section>
{{-- <div id="user">
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h1 class="panel-title text-center">Tambah Data User</h1>
        </div>
        
    </div>
</div> --}}

@endsection