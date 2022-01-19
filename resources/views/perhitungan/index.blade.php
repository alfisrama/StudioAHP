@extends('layouts.master')
@section('main')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Perhitungan AHP</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Perhitungan AHP</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            
            {{-- Bobot --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Bobot Kriteria</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="" class="display table table-responsive-md table-hover table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 20%">Pelayanan</th>
                                    <th style="width: 20%">Harga</th>
                                    <th style="width: 20%">Fasilitas Alat</th>
                                    <th style="width: 20%">Waktu Operasional</th>
                                    <th style="width: 20%">Fasilitas Rekaman</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>{{$bpelayanan}}</td>
                                    <td>{{$bharga}}</td>
                                    <td>{{$bfasilitas_alat}}</td>
                                    <td>{{$bwaktu_operasional}}</td>
                                    <td>{{$bfasilitas_rekaman}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            {{-- Konversi --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Konversi Alternatif</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if (!empty($konversiAlternatif))
                        <table id="" class="display data-table table table-responsive-md table-hover table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 25%" >Nama Studio</th>
                                    <th style="width: 15%">Pelayanan</th>
                                    <th style="width: 15%">Harga</th>
                                    <th style="width: 15%">Fasilitas Alat</th>
                                    <th style="width: 15%">Waktu Operasional</th>
                                    <th style="width: 15%">Fasilitas Rekaman</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($konversiAlternatif as $konversi)
                                <tr>
                                    <td>{{$konversi->studio->nama_studio}}</td>                            
                                    <td class="text-center">{{$konversi->pelayanan}}</td>
                                    <td class="text-center">{{$konversi->harga}}</td>
                                    <td class="text-center">{{$konversi->fasilitas_alat}}</td>
                                    <td class="text-center">{{$konversi->waktu_operasional}}</td>
                                    <td class="text-center">{{$konversi->fasilitas_rekaman}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Jumlah</th>
                                    <th>{{$sumPelayanan}}</th>
                                    <th>{{$sumHarga}}</th>
                                    <th>{{$sumFasilitas_alat}}</th>
                                    <th>{{$sumWaktu_operasional}}</th>
                                    <th>{{$sumFasilitas_rekaman}}</th>
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

            {{-- Matriks perbandingan antar alternatif terhadap masing-masing kriteria --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Matriks perbandingan antar alternatif terhadap masing-masing kriteria</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        {{-- @if (!empty($studio)) --}}
                        <table id="" class="display table data-table table-responsive-md table-hover table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 25%" >Nama Studio</th>
                                    <th style="width: 15%">Pelayanan</th>
                                    <th style="width: 15%">Harga</th>
                                    <th style="width: 15%">Fasilitas Alat</th>
                                    <th style="width: 15%">Waktu Operasional</th>
                                    <th style="width: 15%">Fasilitas Rekaman</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($konversiPerbandingan as $konversi)
                                <tr>
                                    <td>{{$konversi->studio->nama_studio}}</td>
                                    <td class="text-center">{{round(($konversi->pelayanan)/$sumPelayanan,3)}}</td>
                                    <td class="text-center">{{round(($konversi->harga)/$sumHarga,3)}}</td>
                                    <td class="text-center">{{round(($konversi->fasilitas_alat)/$sumFasilitas_alat,3)}}</td>
                                    <td class="text-center">{{round(($konversi->waktu_operasional)/$sumWaktu_operasional,3)}}</td>
                                    <td class="text-center">{{round(($konversi->fasilitas_rekaman)/$sumFasilitas_rekaman,3)}}</td>
                                </tr>                                
                                @endforeach
                            </tbody>
                        </table>
                        {{-- @else
                            <h5 class="mb-2">Tidak Ada Data</h5>
                        @endif     --}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

            {{-- matriks total prioritas global --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Matriks total prioritas global (Ranking)</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table-ranking" class="display table table-responsive-md table-hover table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 20%">Nama Studio</th>
                                    <th>Pelayanan</th>
                                    <th>Harga</th>
                                    <th>Fasilitas Alat</th>
                                    <th>Waktu Operasional</th>
                                    <th>Fasilitas Rekaman</th>
                                    <th>Jumlah</th>
                                    <th>Rangking</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @php    
                                $a = 1;
                                @endphp
                                @foreach($konversiHasil as $konversi)
                                <tr>
                                    <td>{{$z = $konversi->studio->nama_studio}}</td>
                                    <td class="text-center">{{$a = round($bpelayanan*(($konversi->pelayanan)/$sumPelayanan),4)}}</td>
                                    <td class="text-center">{{$b = round($bharga*(($konversi->harga)/$sumHarga),4)}}</td>
                                    <td class="text-center">{{$c = round($bfasilitas_alat*(($konversi->fasilitas_alat)/$sumFasilitas_alat),4)}}</td>
                                    <td class="text-center">{{$d = round($bwaktu_operasional*(($konversi->waktu_operasional)/$sumWaktu_operasional),4)}}</td>
                                    <td class="text-center">{{$e = round($bfasilitas_rekaman*(($konversi->fasilitas_rekaman)/$sumFasilitas_rekaman),4)}}</td>
                                    <td class="text-center total bg-warning">{{$total = $a+$b+$c+$d+$e}}</td>
                                    <td class="text-center rank bg-success"></td>
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
        $('#table-ranking').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [7]
            }],
        });
    });

    $(document).ready(function() {
        $(".total")
        .map(function(){return $(this).text()})
        .get()
        .sort(function(a,b){return a - b })
        .reduce(function(a, b){ if (b != a[0]) a.unshift(b); return a }, [])
        .forEach((v,i)=>{
            $('.total').filter(function() {return $(this).text() == v;}).next().text(i + 1);
        });
    });
</script>
@endsection