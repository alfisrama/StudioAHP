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
        {!! Form::model($user, ['method' => 'PATCH', 'files' => true, 'action' => ['UserController@update', $user->id]]) !!}
            @include('user.form', ['submitButtonText' => 'Simpan', 'id'=>'submitForm'])
        {!! Form::close() !!}
    </div>
</section>
@endsection