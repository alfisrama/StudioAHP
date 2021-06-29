@if (isset($booking))
  {!! Form::hidden('id', $booking->id) !!}
@endif

<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Form booking studio musik</h3>
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
      {{-- <div class="col-md-6" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('id_users') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('id_users', 'Nama User:', ['class' => 'control-label']) !!}
          @if(!empty($studio))
            {!! Form::select('id_users', $users, null, ['class' => 'form-control id_users select2-hidden-accessible', 'id' => 'id_users', 'placeholder' => 'Pilih Studio', 'data-select2-id'=>'17', 'style'=>'width: 100%;', 'tabindex'=>'-1', 'aria-hidden'=>'true', 'required']) !!}  
          @else
            <p>Tidak ada pilihan Studio!</p>
          @endif
          @if ($errors->has('id_users'))
            <span class="help-block">{{ $errors->first('id_users') }}</span>
          @endif
        </div>
      </div> --}}

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
          {!!Form::select('ruangan', ['0'=>'Pilih studio terlebih dahulu',], null, ['class' => 'form-control ruangan', 'required', 'tabindex'=>'-1', 'id'=>'ruangan', 'placeholder' => 'Pilih Ruangan...']);!!}
          @if ($errors->has('ruangan'))
              <span class="help-block">{{ $errors->first('ruangan') }}</span>
          @endif
        </div>
      </div>
    </div>
    
    <center>{!! Form::label('waktu_booking', 'Waktu Booking', ['class' => 'control-label']) !!}</center>
    <div class="row">
      {{-- tanggal --}}
      <div class="col-md-4" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('tanggal') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-calendar"></i></span>
              @php
                $batas = date("Y-m-d", strtotime('+1 year'));
              @endphp 
            </div>
            {!! Form::date('tanggal', null, ['class' => 'form-control tanggal', 'onchange'=>'getWaktu()', 'id'=>'tanggal', 'placeholder'=>'Jam Mulai', 'min'=> date('Y-m-d'), 'max'=>$batas, 'required']) !!}
          </div>
          @if ($errors->has('tanggal'))
            <span class="help-block">{{ $errors->first('tanggal') }}</span>
          @endif
        </div>
      </div>

      {{-- Start --}}
      <div class="col-md-4" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('start') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-clock"></i></span>
            </div>
            {!!Form::select('start', ['0'=>'Pilih studio terlebih dahulu',], null, ['class' => 'form-control start', 'required', 'tabindex'=>'-1', 'id'=>'start', 'placeholder' => 'Mulai jam', 'onchange'=>'getDurasi()']);!!}
            {{-- {!! Form::time('start', null, ['class' => 'form-control start', 'onchange'=>'getWaktu()', 'id'=>'start', 'placeholder'=>'Jam Mulai', 'required']) !!} --}}
          </div>
          @if ($errors->has('start'))
            <span class="help-block">{{ $errors->first('start') }}</span>
          @endif
        </div>
      </div>

      {{-- Durasi --}}
      <div class="col-md-4" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('durasi') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-clock"></i></span>
            </div>
            {!!Form::select('durasi', ['0'=>'Pilih jam mulai terlebih dahulu',], null, ['class' => 'form-control durasi', 'required', 'tabindex'=>'-1', 'id'=>'durasi', 'placeholder' => 'Durasi', 'onchange'=>'getHarga()']);!!}
            {{-- {!! Form::time('durasi', null, ['class' => 'form-control durasi', 'id'=>'durasi', 'onkeyup'=>'getWaktu()', 'placeholder'=>'Durasi', 'required']) !!} --}}
          </div>
          @if ($errors->has('durasi'))
            <span class="help-block">{{ $errors->first('durasi') }}</span>
          @endif
        </div>
      </div>  
    </div>
    <!-- /.row -->
    {{-- Harga --}}
    <div class="" data-select2-id="46">
      @if ($errors->any())
        <div class="form-group input-group {{ $errors->has('harga') ? 'has-error' : 'has-success' }}">
      @else
        <div class="form-group input-group">
      @endif
        {!! Form::label('harga', 'Harga:', ['class' => 'control-label input-group']) !!}
        <div class="input-group-prepend">
          <span class="input-group-text">Rp</span>
        </div>
        {!! Form::text('harga', null, ['class' => 'form-control harga', 'id'=>'harga']) !!}
        <div class="input-group-append">
          <span class="input-group-text">.00</span>
        </div>
        @if ($errors->has('harga'))
            <span class="help-block">{{ $errors->first('harga') }}</span>
        @endif
      </div>
    </div>
  </div>
  <!-- /.card-body -->
</div>

<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control', 'onclick'=>'javascript: return confirm("yakin?");']) !!}
</div>

@section('script')
<script>
  function setNum(num)
  {
    if(num > 1000)
    {
      return false;
    }
    else if(num<1000 && num > 99)
    {
      return num.toString();
    }
    else if(num < 100 && num > 9)
    {
      return num+":00";
    }
    else
    {
      return "0"+num+":00";
    }
  }

  function autofill() {
    $('#ruangan').find('option').not(':first').remove();
    $('#start').find('option').not(':first').remove();

    var studio = $("#id_studio").val();
    $.ajax({
      url : +studio+'/getData',
      type : "get",
      dataType : 'json',
      data : {},
      success: function(data) {     
        // ruangan
        var jRuangan = data.ruangan[''];
        if(jRuangan > 0){
          // Read data and create <option >
          for(var i=1; i<(jRuangan)+1; i++){
            var option = "<option value='"+i+"'>"+i+"</option>"; 
            $("#ruangan").append(option);
          }
        }

        // jam
        var jBuka = parseInt(data.buka['']);
        var jTutup = parseInt(data.tutup['']);
        if(jBuka > 0){
          // Read data and create <option >
          for(var i=(jBuka); i<(jTutup)+1; i++){
            var option = "<option value='"+setNum(i)+"'>"+setNum(i)+"</option>"; 
            $("#start").append(option);
          }
        }
      }
    });  
  }

  function getDurasi() {
    $('#durasi').find('option').not(':first').remove();
    var studio = $("#id_studio").val();
    $.ajax({
      url : +studio+'/getData',
      type : "get",
      dataType : 'json',
      data : {},
      success: function(data) {
        var jBuka = parseInt(data.buka['']);
        var jTutup = parseInt(data.tutup['']);
        var start = parseInt(document.getElementById('start').value);
        var durasi = jTutup - start;
        if(jBuka > 0){
          // Read data and create <option >
          for(var i=1; i<(durasi)+1; i++){
            var option = "<option value='"+i+"'>"+i+" Jam</option>"; 
            $("#durasi").append(option);
          }
        }
      }
    });
  }

  function getHarga() {
    var durasi = $("#durasi").val();
    var studio = $("#id_studio").val();
    $.ajax({
      url : +studio+'/getData',
      type : "get",
      dataType : 'json',
      data : {},
      success: function(data) {
        var harga = parseFloat(data.harga[''].replace(/,/gi,''));
        if (durasi != 0) {
          var tHarga = harga * durasi;
          document.getElementById('harga').value = tHarga;
        } else {
          document.getElementById('harga').value = '0';
        }
      }
    });
  }

  function coba(){
  	var kalender = document.getElementById('kalender').value;
    var mulai = document.getElementById('mulai').value;
    var selesai = document.getElementById('selesai').value;
    var start = new Date(kalender+' '+mulai);
    var end = new Date(kalender+' '+selesai);

      //To calculate the time difference of two dates
  	var In_Time = start.getTime() - end.getTime();
    
  	// To calculate the no. of days between two dates
  	var In_Days = In_Time / (1000 * 3600);
    
    alert('Execution time: ' + In_Days);
  }

  $(function (){
    // mask
    $('.harga').mask('#,###', {reverse: true});
    
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