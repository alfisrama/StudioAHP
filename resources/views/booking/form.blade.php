@if (isset($booking))
  {!! Form::hidden('id', $booking->id) !!}
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

      {{-- Users --}}
      <div class="col-md-6" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('id_users') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('id_users', 'Nama User:', ['class' => 'control-label']) !!}
          @if(!empty($studio))
            {!! Form::select('id_users', $users, null, ['class' => 'form-control id_users select2-hidden-accessible', 'id' => 'id_users', 'onchange'=>'autofill()', 'placeholder' => 'Pilih Studio', 'data-select2-id'=>'17', 'style'=>'width: 100%;', 'tabindex'=>'-1', 'aria-hidden'=>'true', 'required']) !!}  
          @else
            <p>Tidak ada pilihan Studio!</p>
          @endif
          @if ($errors->has('id_users'))
            <span class="help-block">{{ $errors->first('id_users') }}</span>
          @endif
        </div>
      </div>

      {{-- Studio --}}
      <div class="col-md-6" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('id_studio') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('id_studio', 'Nama Studio:', ['class' => 'control-label']) !!}
          @if(!empty($studio))
            {!! Form::select('id_studio', $studio, null, ['class' => 'form-control select2-hidden-accessible id_studio', 'id' => 'id_studio', 'onchange'=>'autofill()', 'placeholder' => 'Pilih Studio', 'data-select2-id'=>'17', 'style'=>'width: 100%;', 'tabindex'=>'-1', 'aria-hidden'=>'true', 'required']) !!}  
          @else
            <p>Tidak ada pilihan Studio!</p>
          @endif
          @if ($errors->has('id_studio'))
            <span class="help-block">{{ $errors->first('id_studio') }}</span>
          @endif
        </div>
      </div>

      {{-- Ruangan --}}
      <div class="col-md-6" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('ruangan') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('ruangan', 'Ruangan:', ['class' => 'control-label']) !!}
          {!!Form::select('ruangan',[
            '1'=>'Latihan',
            '2'=>'Latihan + Rekaman Live',
            '3'=>'Latihan + Rekaman Live + Rekaman Tracking',
            '4'=>'Latihan + Rekaman Live + Rekaman Tracking + Mixing',
            '5'=>'Latihan + Rekaman Live + Rekaman Tracking + Mixing + Mastering'],
            null, ['class' => 'form-control', 'required', 'id'=>'ruangan', 'placeholder' => 'Pilih Ruangan...']);
            !!}
          @if ($errors->has('ruangan'))
              <span class="help-block">{{ $errors->first('ruangan') }}</span>
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
    </div>
    
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
            {!! Form::text('buka', null, ['class' => 'form-control buka', 'data-target'=>'#buka', 'onkeyup'=>'getWaktu()', 'id'=>'buka', 'placeholder'=>'Jam Mulai', 'data-inputmask-alias'=>'datetime', 'data-inputmask-inputformat'=>'HH','data-mask'=>'null', 'required']) !!}
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
    </div>
    <!-- /.row -->
  </div>
  <!-- /.card-body -->
</div>

<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control', 'onclick'=>'javascript: return confirm("yakin?");']) !!}
</div>

@section('script')
<script>
  function autofill() {
    var studio = $(".id_studio").val();
    $.ajax({
      url : +studio+'/getData',
      type : "Get",
      dataType : 'json',
      data : {},
      success :function(response) {
        // var json = data,
        // obj = JSON.parse(json);
        $("#harga").val(response[studio].nama_studio);
      }
    });  
  }

  //   $("#id_studio").change(function() {
  //   $.ajax({
  //     url : '/dataS/'+studio,
  //     data: {},
  //     success: function(data) {
  //       if (data.success == true) {
  //         $("#harga").value = data.info;
  //       } else {
  //         alert('Cannot find info');
  //       }

  //     },
  //     error: function(jqXHR, textStatus, errorThrown) {}
  //   });
  // }); 

  $(function (){
    // mask
    // $('.harga').mask('#,###', {reverse: true});
    
    $('#id_users').select2({
      theme: 'bootstrap4'
    })
    $('#id_studio').select2({
      theme: 'bootstrap4'
    })
    //Money Euro
    $('[data-mask]').inputmask()
    
  })

</script>
@endsection