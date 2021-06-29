@extends('layouts.master')
@section('main')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Booking</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{url('booking')}}">Booking</a></li>
                    <li class="breadcrumb-item active">Isi Booking</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        {!! Form::open(['url' => 'booking', 'files' => true]) !!}
            @include('booking.form', ['submitButtonText' => 'Tambah Booking'])
        {!! Form::close() !!}
    </div>
</section>
@endsection