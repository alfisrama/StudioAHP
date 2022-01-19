@extends('layouts.master')
@section('main')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Kriteria</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Kriteria</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
    @if (!empty($bobot))
        <h5 class="mb-2">Klik angka untuk merubah nilai kriteria</h5>
        <div class="row">
            @foreach($bobot as $bobot)
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-concierge-bell"></i></span>
                    
                    <div class="info-box-content">
                        <span class="info-box-text">Pelayanan</span>
                        <span class="info-box-number">
                            <a href="#" data-name="pelayanan" class="pelayanan" data-type="text" data-pk="{{$bobot->id}}" data-url="api/bobot/{{$bobot->id}}/editbobot" data-title="Masukkan nilai">{{$bobot->pelayanan}}</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="fas fa-dollar-sign"></i></span>
                    
                    <div class="info-box-content">
                        <span class="info-box-text">Harga</span>
                        <span class="info-box-number">
                            <a href="#" data-name="harga" class="harga" data-type="text" data-pk="{{$bobot->id}}" data-url="api/bobot/{{$bobot->id}}/editbobot" data-title="Masukkan nilai">{{$bobot->harga}}</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                    
                    <div class="info-box-content">
                        <span class="info-box-text">Fasilitas Alat</span>
                        <span class="info-box-number">
                            <a href="#" data-name="fasilitas_alat" class="fasilitas_alat" data-type="text" data-pk="{{$bobot->id}}" data-url="api/bobot/{{$bobot->id}}/editbobot" data-title="Masukkan nilai">{{$bobot->fasilitas_alat}}</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="far fa-clock"></i></span>
                    
                    <div class="info-box-content">
                        <span class="info-box-text">Waktu Operasional</span>
                        <span class="info-box-number">
                            <a href="#" data-name="waktu_operasional" class="waktu_operasional" data-type="text" data-pk="{{$bobot->id}}" data-url="api/bobot/{{$bobot->id}}/editbobot" data-title="Masukkan nilai">{{$bobot->waktu_operasional}}</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                    
                    <div class="info-box-content">
                        <span class="info-box-text">Fasilitas Rekaman</span>
                        <span class="info-box-number">
                            <a href="#" data-name="fasilitas_rekaman" class="fasilitas_rekaman" data-type="text" data-pk="{{$bobot->id}}" data-url="api/bobot/{{$bobot->id}}/editbobot" data-title="Masukkan nilai">{{$bobot->fasilitas_rekaman}}</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            @endforeach
        </div>
        <!-- /.row -->
    </div>
    @else
        <h5 class="mb-2">Tidak Ada Data</h5>
    @endif
</section>

@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.pelayanan').editable();
        $('.harga').editable();
        $('.fasilitas_alat').editable();
        $('.waktu_operasional').editable();
        $('.fasilitas_rekaman').editable();
    });    
</script>
@endsection