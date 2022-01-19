<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$halaman}}</title>

  <!-- Favicons -->
  
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('bootstrap/dist/img/musicLogo.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('bootstrap/dist/img/musicLogo.png') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('bootstrap/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
  <div class="wrap">
    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div class="hero-container" data-aos="fade-up">
        <h1>Hello!!!</h1>
        <h2>Selamat datang di aplikasi sistem pendukung keputusan pemilihan studio music</h2>
        <a href="#features" class="btn-get-started scrollto">Lihat Studio</a>
      </div>
    </section><!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.html"><img src="{{ asset('bootstrap/dist/img/musicLogo.png') }}" alt="" class="img-fluid"><span> SPK Studio Music</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          {{-- <a href="index.html"><img src="{{ asset('bootstrap/dist/img/musicLogoo.png') }}" alt="" class="img-fluid"></a> --}}
        </div>
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="#header">Home</a></li>
            <li><a href="#features">Studio</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="{{url('booking/create')}}">Booking Studio</a></li>
            @if (Auth::check())
            <li class="drop-down"><a href=""><span>{{ Auth::user()->name }}</span></a>
              <ul>
                <li><a href="{{url('user/'.Auth::user()->id.'/edit')}}"><i class="bx bxs-user"></i> Profile</a></li>
                @if (Auth::check() && Auth::user()->level == ('admin'))
                <li><a href="{{url('dashboard')}}"><i class="bx bxs-dashboard"></i> Dashboard Admin</a></li>
                @endif
                @if (Auth::check() && Auth::user()->level == ('operator'))
                <li><a href="{{url('booking')}}"><i class="bx bxs-dashboard"></i> Data Booking</a></li>
                @endif
                <li>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="bx bxs-door-open"></i> <span>{{ __('Logout') }}</span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                  </a>
                </li>
              </ul>
            </li>
            @else
            <li>
              <a href="{{ route('login') }}"><span>{{ __('Login') }}</span></a>
            </li>
            @endif
          </ul>
        </nav><!-- .nav-menu -->
      </div>
    </header><!-- End Header -->

    <main id="main">
      
      <!-- ======= Studio Section ======= -->
      <section id="features" class="features">
        <div class="container">

          <div class="row">
            @foreach($konversiHasil as $konversi)
            @php
              $z = $konversi->studio->nama_studio;
              $a = round($bpelayanan*(($konversi->pelayanan)/$sumPelayanan),4);
              $b = round($bharga*(($konversi->harga)/$sumHarga),4);
              $c = round($bfasilitas_alat*(($konversi->fasilitas_alat)/$sumFasilitas_alat),4);
              $d = round($bwaktu_operasional*(($konversi->waktu_operasional)/$sumWaktu_operasional),4);
              $e = round($bfasilitas_rekaman*(($konversi->fasilitas_rekaman)/$sumFasilitas_rekaman),4);
              $total = $a+$b+$c+$d+$e;
              @endphp
            <div class="col-md-4 col-sm-12 mb-3 align-items-stretch">
              <div class="card" data-aos="fade-up">
                <img src="{{ asset('assets/img/features-1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <i class="bx bx-music"></i>
                  <h5 class="card-title"><a>{{$z}}</a></h5>
                  {{-- <p class="card-text">Fasilitas</p> --}}
                  <table id="table-ranking">
                    <tr class="text-center">
                      <td>Ranking</td>
                      <td> </td>
                      <td> </td>
                      <td class="total bg-warning" hidden>{{$total}}</td>
                      <td class="rank text-center"></td>
                    </tr>
                  </table>
                </div>
                <div class="card-footer">
                  <a href="{{url('booking/create')}}" class="btn btn-sm btn-primary">Booking Studio</a>
                  {{-- <a href="{{url('booking/create')}}" class="btn btn-sm btn-success">Chat via WhatsApp</a> --}}
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-call"></i> Chat via WhatsApp</button>
                </div>
              </div>
            </div>
            @endforeach
          </div>

        </div>
      </section><!-- End Studio Section -->
      
      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container">

          <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">
            <div class="testimonial-item">
              <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
              <h3>Muhammad Alfis Ramadhan</h3>
              <h4>Developer Aplikasi</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Bismillah for everything
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

        </div>
      </section><!-- End Testimonials Section -->
      <!-- Modal -->
      {!! Form::open(['url' => 'whatsapp', 'files' => true]) !!}
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              Chat WhatsApp
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @if ($errors->any())
                <div class="form-group {{ $errors->has('id_studio') ? 'has-error' : 'has-success' }}">
              @else
                <div class="form-group">
              @endif
                Untuk mendapatkan notifikasi (khusus pengguna pertama) klik <a href="https://wa.me/14155238886?text=join%20forget-brick" target="_blank"/>disini</a><br> 
		{!! Form::label('id_studio', 'Studio:', ['class' => 'control-label']) !!}
                @if(count($list_studio) > 0)
                  {!! Form::select('id_studio', $list_studio, null, ['class' => 'form-control', 'id' => 'id_studio', 'placeholder' => 'Pilih Studio', 'required']) !!}
                @else
                  <p>Tidak ada pilihan studio!</p>
              @endif

              @if ($errors->has('id_studio'))
                <span class="help-block">{{ $errors->first('id_studio') }}</span>
              @endif
                </div>

              @if ($errors->any())
                <div class="form-group {{ $errors->has('nomor_telefon') ? 'has-error' : 'has-success' }}">
              @else
                <div class="form-group">
              @endif
                  {!! Form::label('nomor_telefon', 'Nomor WhatsApp:', ['class' => 'control-label']) !!}
                  {!! Form::text('nomor_telefon', null, ['class' => 'form-control', 'data-inputmask'=>'"mask": ["+629999999999","+6299999999999","+62999999999999"]','data-mask'=>'null', 'required']) !!}
                  @if ($errors->has('nomor_telefon'))
                    <span class="help-block">{{ $errors->first('nomor_telefon') }}</span>
                  @endif
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                {!! Form::submit("Kirim", ['class' => 'btn btn-primary']) !!}
              </div>
            </div>
          </div>
        </div>
      </div>
      {!! Form::close() !!}
      {{-- End Modal --}}

      <!-- ======= F.A.Q Section ======= -->
      {{-- <section id="faq" class="faq">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>F.A.Q</span>
            <h2>F.A.Q</h2>
            <p>Frequently Asked Questions</p>
          </div>

          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                  </p>
                </div>
              </li>

            </ul>
          </div>

        </div>
      </section><!-- End F.A.Q Section --> --}}

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>About</span>
            <h2>About</h2>
          </div>

          <div class="row">
            <div style="background-image: url(assets/img/about.jpg)" data-aos="fade-right" class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
            <div class="col-xl-7 pt-4 pt-lg-0 d-flex align-items-stretch">
              <div class="content d-flex flex-column justify-content-center" data-aos="fade-left">
                <h3>Sistem pendukung keputusan pemilihan studio musik</h3>
                <p>
                  Aplikasi ini merupakan sebuah implementasi dari sistem pendukung keputusan yang menggunakan metode Analytical Hierarchy Process,
                  pada aplikasi ini terdapat fitur diantaranya
                </p>
                <div class="row">
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <i class="bx bx-receipt"></i>
                    <h4>Mendata Studio Musik</h4>
                    <p>Pada aplikasi ini admin dapat menyimpan data-data studio musik</p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <i class="bx bx-calendar"></i>
                    <h4>Melakukan Booking</h4>
                    <p>Pada aplikasi ini pengguna dapat melakukan booking studio musik</p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Melihat Proses Perangkingan</h4>
                    <p>Pada aplikasi ini admin dapat melihat proses perangkingan studio musik menggunakan metode AHP</p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <i class="bx bx-images"></i>
                    <h4>Melihat Rangking Studio Musik</h4>
                    <p>Pada aplikasi ini pengguna dapat melihat rangking studio musik yang dihasilkan dengan menggunakan metode AHP</p>
                  </div>
                </div>
              </div><!-- End .content-->
            </div>
          </div>

        </div>
      </section><!-- End About Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-5 col-md-6 footer-contact">
              <h3>SPK Studio Music</h3>
              <p>
                Muhammad Alfis Ramadhan <br>
                Teknik Informatika<br>
                Politeknik Negeri Jakarta <br><br>
                <strong>Email:</strong> muhammadalfisramadhan@gmail.com<br>
              </p>
            </div>

            <div class="col-lg-5 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#header">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#features">Studio</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{url('booking/create')}}">Booking</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Social Media</h4>
              <p>Temukan saya disini</p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/malfisr" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/alfis_rama/" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>SPK Studio Music</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <b>Version</b> 1.0
        </div>
      </div>
    </footer><!-- End Footer -->

  </div>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('bootstrap/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
  <!-- InputMask -->
  <script src="{{ asset('bootstrap/plugins/moment/moment.min.js')}}"></script>
  <script src="{{ asset('bootstrap/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>
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

    function sendWA() {
      var studio = $("#id_studio").val();
      $.ajax({
        url : +studio+'/getData',
        type : "get",
        dataType : 'json',
        data : {},
        success: function(data) {
          var jBuka = parseInt(data.buka['']);
          var jTutup = parseInt(data.tutup['']);
          
        }
      });
    }

    $(function (){
      $('[data-mask]').inputmask()
    })
  </script>

</body>

</html>