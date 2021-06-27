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
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Booking</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data booking studio musik</h3>
                        <a type="button" class="btn btn-xs btn-primary float-right" href="{{ url('booking/create') }}"><i class="fa fa-plus-square"></i> Tambah Booking </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table-booking" class="display table table-responsive-md table-hover table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama Studio</th>
                                    <th>Nama User</th>
                                    <th>Ruangan</th>
                                    <th>Tanggal</th>
                                    <th>Start</th>
                                    <th>Durasi</th>
                                    <th>End</th>
                                    <th>Harga</th>
                                    <th width="10%" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($booking as $booking)
                                <tr>
                                    <td>{{$booking->studio->nama_studio}}</td>
                                    <td>{{$booking->user->name}}</td>
                                    <td class="text-center">{{$booking->ruangan}}</td>
                                    <td>{{$booking->tanggal->format('d-m-Y')}}</td>
                                    <td>{{$booking->start->format('H:i')}}</td>
                                    <td>{{$booking->durasi}} Jam</td>
                                    <td>{{$booking->end->format('H:i')}}</td>
                                    <td>{{$booking->harga}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-warning text-center" href="{{url('booking/'.$booking->id.'/edit')}}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger btn-sm delete text-center" href="#" booking-id="{{$booking->id}}" booking-nama="{{$booking->studio->nama_studio}}"><i class="fas fa-trash-alt"></i></a>                                
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>   
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#table-booking').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [8]
            }],
        });
    });

    $('.delete').click(function(){
        var booking_id = $(this).attr('booking-id');
        var booking_nama = $(this).attr('booking-nama');
        swal({
            title : "Yakin?",
            text  : "Mau menghapus booking studio "+booking_nama+"?",
            icon  : "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete){
                window.location = "booking/"+booking_id+"/delete";
            }
        });
    });
</script>
@endsection