@extends('layouts.master')
@section('main')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Bobot</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Bobot</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
    @if (!empty($bobot))
        <h5 class="mb-2">Klik angka untuk merubah nilai bobot</h5>
        <div class="row">
            @foreach($bobot as $bobot)
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                    
                    <div class="info-box-content">
                        <span class="info-box-text">Kelengkapan Alat</span>
                        <span class="info-box-number">
                            <a href="#" data-name="kelengkapan_alat" class="kelengkapan_alat" data-type="text" data-pk="{{$bobot->id}}" data-url="api/bobot/{{$bobot->id}}/editbobot" data-title="Masukkan nilai">{{$bobot->kelengkapan_alat}}</a>
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
                        <span class="info-box-text">Kualitas Alat</span>
                        <span class="info-box-number">
                            <a href="#" data-name="kualitas_alat" class="kualitas_alat" data-type="text" data-pk="{{$bobot->id}}" data-url="api/bobot/{{$bobot->id}}/editbobot" data-title="Masukkan nilai">{{$bobot->kualitas_alat}}</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                    
                    <div class="info-box-content">
                        <span class="info-box-text">Kualitas Ruangan</span>
                        <span class="info-box-number">
                            <a href="#" data-name="kualitas_ruangan" class="kualitas_ruangan" data-type="text" data-pk="{{$bobot->id}}" data-url="api/bobot/{{$bobot->id}}/editbobot" data-title="Masukkan nilai">{{$bobot->kualitas_ruangan}}</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
                    
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
                    <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                    
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
                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                    
                    <div class="info-box-content">
                        <span class="info-box-text">Fasilitas</span>
                        <span class="info-box-number">
                            <a href="#" data-name="fasilitas" class="fasilitas" data-type="text" data-pk="{{$bobot->id}}" data-url="api/bobot/{{$bobot->id}}/editbobot" data-title="Masukkan nilai">{{$bobot->fasilitas}}</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                    
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
                    <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
                    
                    <div class="info-box-content">
                        <span class="info-box-text">Suasana Studio</span>
                        <span class="info-box-number">
                            <a href="#" data-name="suasana_studio" class="suasana_studio" data-type="text" data-pk="{{$bobot->id}}" data-url="api/bobot/{{$bobot->id}}/editbobot" data-title="Masukkan nilai">{{$bobot->suasana_studio}}</a>
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
        $('.kelengkapan_alat').editable();
        $('.kualitas_alat').editable();
        $('.kualitas_ruangan').editable();
        $('.harga').editable();
        $('.pelayanan').editable();
        $('.fasilitas').editable();
        $('.waktu_operasional').editable();
        $('.suasana_studio').editable();
    });    
</script>
@endsection