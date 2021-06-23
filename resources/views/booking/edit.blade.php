@extends('layouts.master')
@section('main')
<div id="booking">
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h1 class="panel-title text-center">Edit Data Booking</h1>
        </div>
    {!! Form::model($booking, ['method' => 'PATCH', 'files' => true, 'action' => ['BookingController@update', $booking->id]]) !!}
    @include('booking.form', ['submitButtonText' => 'Simpan'])
    {!! Form::close() !!}
</div>
@endsection