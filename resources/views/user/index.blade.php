@extends('layouts.master')
@section('main')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">User</li>
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
                        <h3 class="card-title">Data User</h3>
                        <a type="button" class="btn btn-xs btn-primary float-right" href="{{ url('user/create') }}"><i class="fa fa-plus-square"></i> Tambah User </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if (!empty($user))
                        <table id="table-user" class="display table table-hover table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th>Nama User</th>
                                    <th>Telefon</th>
                                    <th>E-mail</th>
                                    <th>Level</th>
                                    <th>Izin</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->telefon}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->level}}</td>
                                    @php
                                        if ($user->izin == 1) {
                                            $akses = "Diblokir";
                                        }else{
                                            $akses = "Diizinkan";
                                        }
                                    @endphp
                                    <td>{{$akses}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-warning text-center" href="{{url('user/'.$user->id.'/edit')}}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger btn-sm delete text-center" href="#" user-id="{{$user->id}}" user-name="{{$user->name}}"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Nama User</th>
                                    <th>Telefon</th>
                                    <th>E-mail</th>
                                    <th>Level</th>
                                    <th>Izin</th>
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
        $('#table-user').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [5],
            }],
        });
    });

    $('.delete').click(function(){
        var user_id = $(this).attr('user-id');
        var user_name = $(this).attr('user-name');
        swal({
            title : "Yakin?",
            text  : "Mau menghapus "+user_name+"?",
            icon  : "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete){
                window.location = "user/"+user_id+"/delete";
            }
        });
    });
</script>
@endsection