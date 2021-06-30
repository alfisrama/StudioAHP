@if (isset($user))
  {!! Form::hidden('id', $user->id) !!}
@endif

<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Data User</h3>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row">
      {{-- Nama User --}}
      <div class="col-md-6" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('name') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('name', 'Nama User:', ['class' => 'control-label']) !!}
          {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
          @if ($errors->has('name'))
            <span class="help-block">{{ $errors->first('name') }}</span>
          @endif
        </div>
      {{-- </div> --}}
           
      {{-- Telefon --}}
      {{-- <div class="col-md-6" data-select2-id="46"> --}}
        @if ($errors->any())
          <div class="form-group {{ $errors->has('telefon') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('telefon', 'Telefon:', ['class' => 'control-label']) !!}
          {!! Form::text('telefon', null, ['class'=>'form-control', 'data-inputmask'=>'"mask": ["9999-9999-999", "9999-9999-9999", "+99-9999-9999-9999"]','data-mask'=>'null', 'required']) !!}
          @if ($errors->has('telefon'))
            <span class="help-block">{{ $errors->first('telefon') }}</span>
          @endif
        </div>
      {{-- </div> --}}

      {{-- Email --}}
      {{-- <div class="col-md-6" data-select2-id="46"> --}}
        @if ($errors->any())
          <div class="form-group {{ $errors->has('email') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
          {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
          @if ($errors->has('email'))
            <span class="help-block">{{ $errors->first('email') }}</span>
          @endif
        </div>
      </div>

      {{-- Password --}}
      <div class="col-md-6" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('password') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
          {!! Form::password('password', ['class' => 'form-control']) !!}        
          @if ($errors->has('password'))
            <span class="help-block">{{ $errors->first('password') }}</span>
          @endif
        </div>
      {{-- </div> --}}

      {{-- Password Confirmation --}}
      {{-- <div class="col-md-6" data-select2-id="46"> --}}
        @if ($errors->any())
          <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('password_confirmation', 'Password Confirmation:', ['class' => 'control-label']) !!}
          {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}        
          @if ($errors->has('password_confirmation'))
            <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

@if (Auth::user()->level == ('admin'))
<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Admin Section</h3>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row">
      {{-- Level --}}
      <div class="col-md-6" data-select2-id="46">
        @if ($errors->any())
          <div class="form-group {{ $errors->has('level') ? 'has-error' : 'has-success' }}">
        @else
          <div class="form-group">
        @endif
          {!! Form::label('level', 'Level:', ['class' => 'control-label']) !!}
          {!!Form::select('level',[
            'admin'=>'Admin',
            'operator'=>'Operator',
            'customer'=>'Customer',],
            null, ['class' => 'form-control', 'required', 'placeholder' => 'Pilih Level...']);
            !!}
          @if ($errors->has('level'))
              <span class="help-block">{{ $errors->first('level') }}</span>
          @endif
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.card-body -->
</div>
@endif

<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@section('script')
<script>
  $(function (){
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