@extends('layouts.master')
@section('main')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Studio</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Studio</li>
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
                        <h3 class="card-title">Data studio musik</h3>
                        <a type="button" class="btn btn-xs btn-primary float-right" href="{{ url('studio/create') }}"><i class="fa fa-plus-square"></i> Tambah Studio </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if (!empty($studio))
                        <table id="table-studio" class="display table table-responsive table-hover table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th>Nama Studio</th>
                                    <th>Telefon</th>
                                    <th>Jumlah Ruangan</th>
                                    <th>Fasilitas</th>
                                    <th>Harga</th>
                                    <th>Buka</th>
                                    <th>Tutup</th>
                                    <th>Operator</th>
                                    <th>Alamat</th>
                                    <th style="width: 10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($studio as $studio)
                                <tr>
                                    <td>{{$studio->nama_studio}}</td>
                                    <td>{{$studio->telefon}}</td>
                                    <td class="text-center">{{$studio->jumlah_ruangan}}</td>
                                    @php
                                        $option = $studio->fasilitas;
                                        if ($option == 1){
                                            $fasilitas = "Latihan";
                                        }else if ($option == 2){
                                            $fasilitas = "Latihan + Rekaman Live";
                                        }else if ($option == 3){
                                            $fasilitas = "Latihan + Rekaman Live + Rekaman Tracking";
                                        }else if ($option == 4){
                                            $fasilitas = "Latihan + Rekaman Live + Rekaman Tracking + Mixing";
                                        }else if ($option == 5){
                                            $fasilitas = "Latihan + Rekaman Live + Rekaman Tracking + Mixing + Mastering";
                                        }
                                    @endphp
                                    <td>{{$fasilitas}}</td>
                                    <td>Rp {{$studio->harga}}.00</td>
                                    <td class="text-center">{{\Carbon\Carbon::createFromFormat('H:i:s',$studio->buka)->format('H:i')}}</td>
                                    <td class="text-center">{{\Carbon\Carbon::createFromFormat('H:i:s',$studio->tutup)->format('H:i')}}</td>
                                    <td class="text-center">{{$studio->users->name}}</td>
                                    <td>{{$studio->alamat}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-warning text-center" href="{{url('studio/'.$studio->id.'/edit')}}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger btn-sm delete text-center" href="#" studio-id="{{$studio->id}}" studio-nama="{{$studio->nama_studio}}"><i class="fas fa-trash-alt"></i></a>
                                        {{-- <a> {{url('studio/'.$studio->id.'/destroy')}}
                                            {!! Form::open(['method' => 'DELETE', 'action' => ['StudioController@destroy', $studio->id]]) !!}
                                            {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm delete', 'studio-id'=>'{{$studio->id}}']) !!}
                                            {!! Form::close() !!}
                                        </a> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Nama Studio</th>
                                    <th>Telefon</th>
                                    <th>Jumlah Ruangan</th>
                                    <th>Fasilitas</th>
                                    <th>Harga</th>
                                    <th>Buka</th>
                                    <th>Tutup</th>
                                    <th>Operator</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                        @else
                            <h5 class="mb-2">Tidak Ada Data</h5>
                        @endif    
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
        $('#table-studio').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [9]
            }],
        });
    });

    $('.delete').click(function(){
        var studio_id = $(this).attr('studio-id');
        var studio_nama = $(this).attr('studio-nama');
        swal({
            title : "Yakin?",
            text  : "Mau menghapus "+studio_nama+"?",
            icon  : "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete){
                window.location = "studio/"+studio_id+"/delete";
            }
        });
    });
</script>
@endsection