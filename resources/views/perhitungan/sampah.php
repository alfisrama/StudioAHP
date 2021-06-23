batas
            {{-- Konversi
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
                        <table id="" class="display table table-responsive table-hover table-bordered table-striped" style="width:100%">
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
                                @foreach($konversiAlternatif as $konversiAlternatif)
                                <tr class="text-center">
                                    <td>{{$konversiAlternatif->studio->nama_studio}}</td>
                                    <td>{{$kkelengkapan_alat = $konversiAlternatif->kelengkapan_alat}}</td>
                                    <td>{{$kkualitas_alat = $konversiAlternatif->kualitas_alat}}</td>
                                    <td>{{$kkualitas_ruangan = $konversiAlternatif->kualitas_ruangan}}</td>
                                    <td>{{$kharga = $konversiAlternatif->harga}}</td>
                                    <td>{{$kpelayanan = $konversiAlternatif->pelayanan}}</td>
                                    <td>{{$kfasilitas = $konversiAlternatif->fasilitas}}</td>
                                    <td>{{$kwaktu_operasional = $konversiAlternatif->waktu_operasional}}</td>
                                    <td>{{$ksuasana_studio = $konversiAlternatif->suasana_studio}}</td>
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
            <!-- /.col --> --}}

            {{-- Matriks perbandingan antar alternatif terhadap masing-masing kriteria --}}
            {{-- <div class="col-12">
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
                        @if (!empty($studio))
                        <table id="" class="display table table-responsive table-hover table-bordered table-striped" style="width:100%">
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
                                @foreach($konversiPerbandingan as $konversiPerbandingan)
                                <tr class="text-center">
                                    <td>{{$konversiPerbandingan->studio->nama_studio}}</td>
                                    <td>{{$rkelengkapan_alat = round($konversiPerbandingan->kelengkapan_alat/$sumKelengkapan_alat,3)}}</td>
                                    <td>{{$rkualitas_alat = round($konversiPerbandingan->kualitas_alat/$sumKualitas_alat,3)}}</td>
                                    <td>{{$rkualitas_ruangan = round($konversiPerbandingan->kualitas_ruangan/$sumKualitas_ruangan,3)}}</td>
                                    <td>{{$rharga = round($konversiPerbandingan->harga/$sumHarga,3)}}</td>
                                    <td>{{$rpelayanan = round($konversiPerbandingan->pelayanan/$sumPelayanan,3)}}</td>
                                    <td>{{$rfasilitas = round($konversiPerbandingan->fasilitas/$sumFasilitas,3)}}</td>
                                    <td>{{$rwaktu_operasional = round($konversiPerbandingan->waktu_operasional/$sumWaktu_operasional,3)}}</td>
                                    <td>{{$rsuasana_studio = round($konversiPerbandingan->suasana_studio/$sumSuasana_studio,3)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                            <h5 class="mb-2">Tidak Ada Data</h5>
                        @endif    
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col --> --}}

            {{-- matriks total prioritas global --}}
            {{-- <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Menentukan Matriks Total Prioritas Global</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if (!empty($studio))
                        <table id="" class="display table table-responsive table-hover table-bordered table-striped" style="width:100%">
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
                                @foreach($konversiHasil as $konversiHasil)
                                <tr>
                                    <td>{{$konversiHasil->studio->nama_studio}}</td>
                                    <td>{{$bkelengkapan_alat*($kkelengkapan_alat/$sumKelengkapan_alat) }}</td>
                                    <td>{{$bkualitas_alat*($kkualitas_alat/$sumKualitas_alat) }}</td>
                                    <td>{{$bkualitas_ruangan*($kkualitas_ruangan/$sumKualitas_ruangan) }}</td>
                                    <td>{{$bharga*($kharga/$sumHarga) }}</td>
                                    <td>{{$bpelayanan*($kpelayanan/$sumPelayanan) }}</td>
                                    <td>{{$bfasilitas*($kfasilitas/$sumFasilitas) }}</td>
                                    <td>{{$bwaktu_operasional*($kwaktu_operasional/$sumWaktu_operasional) }}</td>
                                    <td>{{$bsuasana_studio*($ksuasana_studio/$sumSuasana_studio) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                            <h5 class="mb-2">Tidak Ada Data</h5>
                        @endif    
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col --> --}}