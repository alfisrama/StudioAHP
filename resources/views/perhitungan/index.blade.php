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
                                <tr  class="text-center">
                                    <th>Kelengkapan Alat</th>
                                    <th>Kualitas Alat</th>
                                    <th>Kualitas Ruangan</th>
                                    <th>Harga</th>
                                    <th>Pelayanan</th>
                                    <th>Fasilitas</th>
                                    <th>Waktu Operasional</th>
                                    <th>Suasana Studio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>{{$bkelengkapan_alat}}</td>
                                    <td>{{$bkualitas_alat}}</td>
                                    <td>{{$bkualitas_ruangan}}</td>
                                    <td>{{$bharga}}</td>
                                    <td>{{$bpelayanan}}</td>
                                    <td>{{$bfasilitas}}</td>
                                    <td>{{$bwaktu_operasional}}</td>
                                    <td>{{$bsuasana_studio}}</td>
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
                        <table id="" class="display data-table table table-responsive table-hover table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th>Nama Studio</th>
                                    <th>Kelengkapan Alat</th>
                                    <th>Kualitas Alat</th>
                                    <th>Kualitas Ruangan</th>
                                    <th>Harga</th>
                                    <th>Pelayanan</th>
                                    <th>Fasilitas</th>
                                    <th>Waktu Operasional</th>
                                    <th>Suasana Studio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($konversiAlternatif as $konversi)
                                <tr class="text-center">
                                    <td>{{$konversi->studio->nama_studio}}</td>
                                    <td>{{$konversi->kelengkapan_alat}}</td>
                                    <td>{{$konversi->kualitas_alat}}</td>
                                    <td>{{$konversi->kualitas_ruangan}}</td>
                                    <td>{{$konversi->harga}}</td>
                                    <td>{{$konversi->pelayanan}}</td>
                                    <td>{{$konversi->fasilitas}}</td>
                                    <td>{{$konversi->waktu_operasional}}</td>
                                    <td>{{$konversi->suasana_studio}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Jumlah</th>
                                    <th>{{$sumKelengkapan_alat}}</th>
                                    <th>{{$sumKualitas_alat}}</th>
                                    <th>{{$sumKualitas_ruangan}}</th>
                                    <th>{{$sumHarga}}</th>
                                    <th>{{$sumPelayanan}}</th>
                                    <th>{{$sumFasilitas}}</th>
                                    <th>{{$sumWaktu_operasional}}</th>
                                    <th>{{$sumSuasana_studio}}</th>
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
                        <table id="" class="display table data-table table-responsive table-hover table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th>Nama Studio</th>
                                    <th>Kelengkapan Alat</th>
                                    <th>Kualitas Alat</th>
                                    <th>Kualitas Ruangan</th>
                                    <th>Harga</th>
                                    <th>Pelayanan</th>
                                    <th>Fasilitas</th>
                                    <th>Waktu Operasional</th>
                                    <th>Suasana Studio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($konversiPerbandingan as $konversi)
                                <tr class="text-center">
                                    <td>{{$konversi->studio->nama_studio}}</td>
                                    <td>{{round(($konversi->kelengkapan_alat)/$sumKelengkapan_alat,3)}}</td>
                                    <td>{{round(($konversi->kualitas_alat)/$sumKualitas_alat,3)}}</td>
                                    <td>{{round(($konversi->kualitas_ruangan)/$sumKualitas_ruangan,3)}}</td>
                                    <td>{{round(($konversi->harga)/$sumHarga,3)}}</td>
                                    <td>{{round(($konversi->pelayanan)/$sumPelayanan,3)}}</td>
                                    <td>{{round(($konversi->fasilitas)/$sumFasilitas,3)}}</td>
                                    <td>{{round(($konversi->waktu_operasional)/$sumWaktu_operasional,3)}}</td>
                                    <td>{{round(($konversi->suasana_studio)/$sumSuasana_studio,3)}}</td>
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
                        <table id="table-ranking" class="display table table-responsive table-hover table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th>Nama Studio</th>
                                    <th>Kelengkapan Alat</th>
                                    <th>Kualitas Alat</th>
                                    <th>Kualitas Ruangan</th>
                                    <th>Harga</th>
                                    <th>Pelayanan</th>
                                    <th>Fasilitas</th>
                                    <th>Waktu Operasional</th>
                                    <th>Suasana Studio</th>
                                    <th>Jumlah</th>
                                    <th>Rangking</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @php    
                                $a = 1;
                                @endphp
                                @foreach($konversiHasil as $konversi)
                                <tr class="text-center">
                                    <td>{{$z = $konversi->studio->nama_studio}}</td>
                                    <td>{{$a = round($bkelengkapan_alat*(($konversi->kelengkapan_alat)/$sumKelengkapan_alat),4)}}</td>
                                    <td>{{$b = round($bkualitas_alat*(($konversi->kualitas_alat)/$sumKualitas_alat),4)}}</td>
                                    <td>{{$c = round($bkualitas_ruangan*(($konversi->kualitas_ruangan)/$sumKualitas_ruangan),4)}}</td>
                                    <td>{{$d = round($bharga*(($konversi->harga)/$sumHarga),4)}}</td>
                                    <td>{{$e = round($bpelayanan*(($konversi->pelayanan)/$sumPelayanan),4)}}</td>
                                    <td>{{$f = round($bfasilitas*(($konversi->fasilitas)/$sumFasilitas),4)}}</td>
                                    <td>{{$g = round($bwaktu_operasional*(($konversi->waktu_operasional)/$sumWaktu_operasional),4)}}</td>
                                    <td>{{$h = round($bsuasana_studio*(($konversi->suasana_studio)/$sumSuasana_studio),4)}}</td>
                                    <td class="total bg-warning">{{$total = $a+$b+$c+$d+$e+$f+$g+$h}}</td>
                                    <td class="rank bg-success"></td>
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
                "targets": [10]
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