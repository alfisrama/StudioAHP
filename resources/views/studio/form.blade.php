@if (isset($studio))
  {!! Form::hidden('id', $studio->id) !!}
@endif

<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Data Studio</h3>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row">

      {{-- Nama Studio --}}
      <div class="col-md-6" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('nama_studio') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('nama_studio', 'Nama Studio:', ['class' => 'control-label']) !!}
          {!! Form::text('nama_studio', null, ['class' => 'form-control', 'required']) !!}
          @if ($errors->has('nama_studio'))
            <span class="help-block">{{ $errors->first('nama_studio') }}</span>
          @endif
        </div>
      </div>

      {{-- Telefon --}}
      <div class="col-md-6" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('telefon') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('telefon', 'Telefon:', ['class' => 'control-label']) !!}
          {!! Form::text('telefon', null, ['class'=>'form-control', 'data-inputmask'=>'"mask": ["9999-9999-999", "9999-9999-9999", "+99-9999-9999-9999"]','data-mask'=>'null', 'required', 'min'=>'13']) !!}
          @if ($errors->has('telefon'))
            <span class="help-block">{{ $errors->first('telefon') }}</span>
          @endif
        </div>
      </div>
      
      {{-- Jumlah Ruangan --}}
      <div class="col-md-6" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('jumlah_ruangan') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('jumlah_ruangan', 'Jumlah Ruangan:', ['class' => 'control-label']) !!}
          {!! Form::number('jumlah_ruangan', null, ['class' => 'form-control', 'required', 'min'=>'1']) !!}
          @if ($errors->has('jumlah_ruangan'))
            <span class="help-block">{{ $errors->first('jumlah_ruangan') }}</span>
          @endif
        </div>
      </div>

      {{-- Fasilitas --}}
      <div class="col-md-6" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('fasilitas') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('fasilitas', 'Fasilitas:', ['class' => 'control-label']) !!}
          {!!Form::select('fasilitas',[
            '1'=>'Latihan',
            '2'=>'Latihan + Rekaman Live',
            '3'=>'Latihan + Rekaman Live + Rekaman Tracking',
            '4'=>'Latihan + Rekaman Live + Rekaman Tracking + Mixing',
            '5'=>'Latihan + Rekaman Live + Rekaman Tracking + Mixing + Mastering'],
            null, ['class' => 'form-control', 'required',  'onchange'=>'getFasilitas()', 'id'=>'fasilitas', 'placeholder' => 'Pilih Fasilitas...']);
            !!}
          @if ($errors->has('fasilitas'))
              <span class="help-block">{{ $errors->first('fasilitas') }}</span>
          @endif
        </div>
      </div>

      {{-- Harga --}}
      <div class="col-md-6" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group input-group {{ $errors->has('harga') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group input-group">
        @endif
          {!! Form::label('harga', 'Harga:', ['class' => 'control-label input-group']) !!}
          <div class="input-group-prepend">
            <span class="input-group-text">Rp</span>
          </div>
          {!! Form::text('harga', null, ['class' => 'form-control harga', 'id'=>'harga', 'onkeyup'=>'inHarga()']) !!}
          <div class="input-group-append">
            <span class="input-group-text">.00</span>
          </div>
          @if ($errors->has('harga'))
              <span class="help-block">{{ $errors->first('harga') }}</span>
          @endif
        </div>
      </div>
      
      {{-- Operator --}}
      <div class="col-md-6" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('id_users') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('id_users', 'Operator:', ['class' => 'control-label']) !!}
          @if(!empty($operator))
            {!! Form::select('id_users', $operator, null, ['class' => 'form-control select2bs4 select2-hidden-accessible', 'id' => 'id_users', 'placeholder' => 'Pilih Operator', 'data-select2-id'=>'17', 'style'=>'width: 100%;', 'tabindex'=>'-1', 'aria-hidden'=>'true', 'required']) !!}  
          @else
            <p>Tidak ada pilihan Operator!</p>
          @endif
          @if ($errors->has('id_users'))
            <span class="help-block">{{ $errors->first('id_users') }}</span>
          @endif
        </div>
      </div>
    </div>
    <!-- /.row -->
    
    <center>{!! Form::label('waktu_operasional', 'Waktu Operasional', ['class' => 'control-label']) !!}</center>
    <div class="row">
      {{-- Buka --}}
      <div class="col-md-6" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('buka') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-clock"></i></span>
            </div>
            {!! Form::text('buka', null, ['class' => 'form-control buka', 'data-target'=>'#buka', 'onkeyup'=>'getWaktu()', 'id'=>'buka', 'placeholder'=>'Jam Buka', 'data-inputmask-alias'=>'datetime', 'data-inputmask-inputformat'=>'HH:MM','data-mask'=>'null', 'required']) !!}
          </div>
          @if ($errors->has('buka'))
            <span class="help-block">{{ $errors->first('buka') }}</span>
          @endif
        </div>
      </div>

      {{-- Tutup --}}
      <div class="col-md-6" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('tutup') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {{-- {!! Form::label('tutup', 'Tutup:', ['class' => 'control-label']) !!} --}}
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-clock"></i></span>
            </div>
            {!! Form::text('tutup', null, ['class' => 'form-control tutup', 'id'=>'tutup', 'onkeyup'=>'getWaktu()', 'placeholder'=>'Jam Tutup', 'data-inputmask-alias'=>'datetime', 'data-inputmask-inputformat'=>'HH:MM','data-mask'=>'null', 'required']) !!}
          </div>
          @if ($errors->has('tutup'))
            <span class="help-block">{{ $errors->first('tutup') }}</span>
          @endif
        </div>
      </div>
      <p>*isi 00:00 pada jam buka dan tutup apabila buka 24jam</p>    
    </div>
    <!-- /.row -->

    {{-- Alamat --}}
    @if ($errors->any())
      <div class="form-group {{ $errors->has('alamat') ? 'has-error' : 'has-success' }}">
    @else
      <div class="form-group">
    @endif
      {!! Form::label('alamat', 'Alamat:', ['class' => 'control-label']) !!}
      {!! Form::textarea('alamat', null, ['class' => 'form-control', 'required', 'rows'=>'3']) !!}
      @if ($errors->has('alamat'))
          <span class="help-block">{{ $errors->first('alamat') }}</span>
      @endif
      </div>
    
    {{-- Foto
    @if ($errors->any())
      <div class="form-group {{ $errors->has('foto') ? 'has-error' : 'has-success' }}">
    @else
      <div class="form-group">
    @endif
      {!! Form::label('foto', 'foto:', ['class' => 'control-label']) !!}
      {!! Form::text('foto', null, ['class' => 'form-control']) !!}
      @if ($errors->has('foto'))
          <span class="help-block">{{ $errors->first('foto') }}</span>
      @endif
      </div> --}}
  </div>
</div>

<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Nilai Studio & Konversi</h3>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row">
      {{-- Kelengkapan Alat --}}
      <div class="col-md-3" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('kelengkapan_alat') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('kelengkapan_alat', 'Kelengkapan Alat:', ['class' => 'control-label']) !!}
          {!!Form::select('kelengkapan_alat',[
            '5'=>'Sangat Lengkap',
            '4'=>'Lengkap',
            '3'=>'Cukup Lengkap',
            '2'=>'Kurang Lengkap',
            '1'=>'Sangat Kurang Lengkap'],
            null, ['class' => 'form-control', 'required', 'placeholder' => '...']);
            !!}
          @if ($errors->has('kelengkapan_alat'))
            <span class="help-block">{{ $errors->first('kelengkapan_alat') }}</span>
          @endif
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      {{-- Kualitas Alat --}}
      <div class="col-md-3" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('kualitas_alat') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('kualitas_alat', 'Kualitas Alat:', ['class' => 'control-label']) !!}
          {!!Form::select('kualitas_alat',[
            '5'=>'Sangat Baik',
            '4'=>'Baik',
            '3'=>'Cukup Baik',
            '2'=>'Kurang Baik',
            '1'=>'Sangat Kurang Baik'],
            null, ['class' => 'form-control', 'required',  'placeholder' => '...']);
            !!}
          @if ($errors->has('kualitas_alat'))
            <span class="help-block">{{ $errors->first('kualitas_alat') }}</span>
          @endif
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      {{-- Kualitas Ruangan --}}
      <div class="col-md-3" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('kualitas_ruangan') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('kualitas_ruangan', 'Kualitas Ruangan:', ['class' => 'control-label']) !!}
          {!!Form::select('kualitas_ruangan',[
            '5'=>'Sangat Baik',
            '4'=>'Baik',
            '3'=>'Cukup Baik',
            '2'=>'Kurang Baik',
            '1'=>'Sangat Kurang Baik'],
            null, ['class' => 'form-control', 'required',  'placeholder' => '...']);
            !!}
          @if ($errors->has('kualitas_ruangan'))
            <span class="help-block">{{ $errors->first('kualitas_ruangan') }}</span>
          @endif
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      {{-- Konversi Harga --}}
      <div class="col-md-3" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('konversi_harga') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('konversi_harga', 'Harga:', ['class' => 'control-label']) !!}
          {!! Form::text('konversi_harga', null, ['class' => 'form-control', 'id'=>'konversi_harga', 'readonly', 'required']) !!}
          @if ($errors->has('konversi_harga'))
            <span class="help-block">{{ $errors->first('konversi_harga') }}</span>
          @endif
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      {{-- Pelayanan --}}
      <div class="col-md-3" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('pelayanan') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('pelayanan', 'Pelayanan:', ['class' => 'control-label']) !!}
          {!!Form::select('pelayanan',[
            '5'=>'Sangat Baik',
            '4'=>'Baik',
            '3'=>'Cukup Baik',
            '2'=>'Kurang Baik',
            '1'=>'Sangat Kurang Baik'],
            null, ['class' => 'form-control', 'required',  'placeholder' => '...']);
            !!}
          @if ($errors->has('pelayanan'))
            <span class="help-block">{{ $errors->first('pelayanan') }}</span>
          @endif
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      {{-- Fasilitas --}}
      <div class="col-md-3" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('konversi_fasilitas') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('konversi_fasilitas', 'Fasilitas:', ['class' => 'control-label']) !!}
          {!! Form::text('konversi_fasilitas', null, ['class' => 'form-control', 'required',  'id'=>'konversi_fasilitas', 'readonly']) !!}
          @if ($errors->has('konversi_fasilitas'))
            <span class="help-block">{{ $errors->first('konversi_fasilitas') }}</span>
          @endif
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      {{-- Waktu Operasional --}}
      <div class="col-md-3" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('waktu_operasional') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('waktu_operasional', 'Waktu Operasional:', ['class' => 'control-label']) !!}
          {!! Form::text('waktu_operasional', null, ['class' => 'form-control', 'required', 'id'=>'konversi_waktu', 'readonly']) !!}
          @if ($errors->has('waktu_operasional'))
            <span class="help-block">{{ $errors->first('waktu_operasional') }}</span>
          @endif
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      {{-- Suasana Studio --}}
      <div class="col-md-3" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('suasana_studio') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('suasana_studio', 'Suasana Studio:', ['class' => 'control-label']) !!}
          {!!Form::select('suasana_studio',[
            '5'=>'Sangat Nyaman',
            '4'=>'Nyaman',
            '3'=>'Cukup Nyaman',
            '2'=>'Kurang Nyaman',
            '1'=>'Sangat Kurang Nyaman'],
            null, ['class' => 'form-control', 'required',  'placeholder' => '...']);
            !!}
          @if ($errors->has('suasana_studio'))
            <span class="help-block">{{ $errors->first('suasana_studio') }}</span>
          @endif
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.card-body -->
</div>

<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control', 'onclick'=>'submitConfirm()']) !!}
</div>

@section('script')
<script>
  // function submitConfirm() {
  //   swal({
  //     title : "Yakin?",
  //     text  : "Menyimpan data",
  //     icon  : "warning",
  //     buttons: true,
  //     dangerMode: true,
  //   }).then((willDelete) => {
  //     if (willDelete){
  //       document.getElementById("myForm").submit();
  //     }
  //   });
  // }

  // harga otomatis
  function inHarga(){
    if ($('#harga').val() != 0) {
      var niHarga = parseFloat(document.getElementById('harga').value.replace(/,/gi,''));

      if(niHarga>200000){
        document.getElementById('konversi_harga').value = "1";
      }else if(150000<niHarga){
        document.getElementById('konversi_harga').value = "2";
      }else if(90000<niHarga){
        document.getElementById('konversi_harga').value = "3";
      }else if(70000<niHarga){
        document.getElementById('konversi_harga').value = "4";
      }else if(50000<niHarga){
        document.getElementById('konversi_harga').value = "5";
      }else if(30000<niHarga){
        document.getElementById('konversi_harga').value = "6";
      }else if(niHarga<30000){
        document.getElementById('konversi_harga').value = "7";
      }
    } else{
      document.getElementById('konversi_harga').value = "0";
    }
  }

  // Fasilitas otomatis
  function getFasilitas(){
    var selectedValue = document.getElementById('fasilitas').value;
    document.getElementById('konversi_fasilitas').value = selectedValue;
  }
  
  function getWaktu(){
    var waTutup = parseFloat(document.getElementById('tutup').value.replace(/:/gi,'.'));
    var waBuka = parseFloat(document.getElementById('buka').value.replace(/:/gi,'.'));
    // 24
    if(waBuka == 00 && waTutup == 00){
      document.getElementById('konversi_waktu').value = "7";
    }
    // pagimalem
    if((12>waBuka && waBuka>6) && (18<=waTutup && waTutup<=24)){
      document.getElementById('konversi_waktu').value = "6";
    }
    // siangdini
    if((12<=waBuka && waBuka<15) && (waTutup<6)){
      document.getElementById('konversi_waktu').value = "5";
    }
    // siangamalam
    if((12<=waBuka && waBuka<15) && (18<=waTutup && waTutup<=24)){
      document.getElementById('konversi_waktu').value = "4";
    }
    // soredini
    if((15<=waBuka && waBuka<18) && (waTutup<6)){
      document.getElementById('konversi_waktu').value = "3";
    }
    // pagisore
    if((12>waBuka && waBuka>6) && (15<=waTutup && waTutup<18)){
      document.getElementById('konversi_waktu').value = "2";
    }
    // soremalam
    if((15<=waBuka && waBuka<18) && (18<=waTutup && waTutup<24)){
      document.getElementById('konversi_waktu').value = "1";
    }

    // if(12>waTutup && waTutup>6){document.getElementById('konversi_waktu').value = "pagi";
    // }if(12<=waTutup && waTutup<15){document.getElementById('konversi_waktu').value = "siang";
    // }if(15<=waTutup && waTutup<18){document.getElementById('konversi_waktu').value = "sore";
    // }if(18<=waTutup && waTutup<24){document.getElementById('konversi_waktu').value = "malem";
    // }if(waTutup<6){document.getElementById('konversi_waktu').value = "dini hari";
    // }
  }
  
  $(function (){
    // mask
    $('.harga').mask('#,###', {reverse: true});
    
    //Select2
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    $('.select3bs4').select2({
      theme: 'bootstrap4'
    })

    $('[data-mask]').inputmask()
  })
</script>
@endsection