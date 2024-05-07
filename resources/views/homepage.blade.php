<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{ asset('template/Gambar_WhatsApp_2024-02-27_pukul_14.48.29_1835ba22-removebg-preview.ico') }}" type="">

  <title> WageWatchers </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('finexo-html/css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="{{ asset('finexo-html/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('finexo-html/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('finexo-html/css/responsive.css')}}" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="{{ asset('finexo-html/images/hero-bg.png')}}" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="{{ asset('template/Gambar_WhatsApp_2024-02-27_pukul_14.48.29_1835ba22-removebg-preview.ico') }}" alt="Logo Aplikasi WageWar">
            <span>
              WageWatchers
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Tentang_web">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Layanan">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Tujuan">Tujuan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team_section">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
              </li>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                        Wage <br>
                        Watchers 
                    </h1>
                    <p>
                      Welcome to WageWatchers: Tempat Absensi Berarti dan Gaji Penting. Di Mana Setiap Detik Berharga, dan Setiap Penghargaan Adil Tercatat
                    </p>
                    <div class="btn-box">
                      <a href="/login" class="btn1">
                        Login
                      </a>
                      <a href="/register" class="btn3">
                        Register
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{ asset('finexo-html/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Wage <br>
                      Watchers
                    </h1>
                    <p>
                      Dalam kerumitan bisnis, setiap kehadiran karyawan dan setiap detik yang mereka berikan sangat berarti. Di WageWatchers, kami memahami bahwa absensi bukan hanya tentang kehadiran fisik; itu tentang keberhasilan, keadilan, dan produktivitas yang sejalan dengan visi perusahaan Anda.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Cek Infonya
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{ asset('finexo-html/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section id="Layanan" class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            <span>Layanan</span> Kami
          </h2>
          <p>
             Berikut layanan-layanan khusus yang kami tawarkan untuk membantu perusahaan Anda mencapai tujuan-tujuan mereka.
          </p>
        </div>
        <div class="row">
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/s1.png')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Pemantauan Absensi yang Akurat
                </h5>
                <p>
                  WageWatchers menyediakan sistem yang canggih untuk merekam dan melacak absensi karyawan dengan akurat. 
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/s2.png')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Perhitungan Gaji yang Otomatis
                </h5>
                <p>
                  Dengan fitur perhitungan gaji otomatis, WageWatchers membantu menghindari kesalahan dan menyederhanakan proses pembayaran karyawan. 
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/s3.png')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Analisis Data yang Mendalam
                </h5>
                <p>
                  WageWatchers menyediakan laporan analitik yang mendalam tentang absensi dan pengeluaran gaji, memberikan wawasan berharga kepada manajemen untuk pengambilan keputusan yang lebih baik. 
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="">
            View All
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- about section -->

  <section id="Tentang_web" class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
          Tentang <span>Kami</span>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{ asset('finexo-html/images/about-img.png')}}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <p>
              WageWatchers adalah solusi inovatif yang menggabungkan teknologi canggih dengan kebijaksanaan bisnis. Kami menyediakan alat yang diperlukan bagi perusahaan untuk mengelola absensi karyawan dengan efisien dan memastikan bahwa setiap jam kerja dihargai dengan adil. Dengan fokus pada transparansi, akurasi, dan keadilan, WageWatchers memungkinkan perusahaan untuk mengoptimalkan produktivitas dan meningkatkan kepuasan karyawan.
              the middle of text. All
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- why section -->

  <section id="Tujuan" class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          <span>Tujuan</span> Kami
        </h2>
      </div>
      <div class="why_container">
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('finexo-html/images/w1.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Absensi yang Terkelola dengan Baik
            </h5>
            <p>
              WageWatchers menyediakan alat untuk merekam dan melacak absensi karyawan secara akurat, termasuk cuti, izin, dan keterlambatan, sehingga perusahaan dapat mengelola kehadiran dengan lebih efisien.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('finexo-html/images/w2.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Memastikan Keadilan
            </h5>
            <p>
              Kami berkomitmen untuk memastikan bahwa setiap karyawan dibayar dengan adil sesuai dengan kontribusi mereka. WageWatchers membantu mencegah kesalahan perhitungan gaji dan mempromosikan keadilan dalam kompensasi.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('finexo-html/images/w3.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Mempermudah Administrasi
            </h5>
            <p>
              Dengan fitur-fitur yang intuitif dan alur kerja yang efisien, WageWatchers membantu mengurangi beban administratif perusahaan terkait dengan manajemen absensi dan gaji.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('finexo-html/images/w4.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Laporan Analitik yang Mendalam
            </h5>
            <p>
              WageWatchers menyediakan laporan analitik yang komprehensif tentang absensi dan pengeluaran gaji, memberikan wawasan berharga kepada manajemen untuk pengambilan keputusan strategis yang lebih baik.
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- end why section -->

  <!-- team section -->
  <section id="team_section" class="team_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2 class="">
          Our <span> Team</span>
        </h2>
      </div>

      <div class="team_container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/team-1.jpg')}}" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Alin Karisa Hizannah
                </h5>
                <p>
                  Fullstack Developer
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/team-2.jpg')}}" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Livia Noorafni Fadilah
                </h5>
                <p>
                  Leader
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/team-3.jpg')}}" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Ahmad Wildan
                </h5>
                <p>
                  Anggota
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/team-4.jpg')}}" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Ovi Andre Khoiruniza
                </h5>
                <p>
                  Anggota
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 offset-lg-3 offset-sm-0">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/team-5.jpg')}}" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Kevin Resha Valleryan A.
                </h5>
                <p>
                  Anggota
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/team-6.jpg')}}" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Tathya Budi Alindita
                </h5>
                <p>
                  Anggota
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end team section -->


  {{-- <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          What says our <span>Customers</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/client1.jpg')}}" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      LusDen
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/client2.jpg')}}" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zen Court
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/client1.jpg')}}" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      LusDen
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/client2.jpg')}}" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zen Court
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section --> --}}


  {{-- <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.html">
                Home
              </a>
              <a class="" href="about.html">
                About
              </a>
              <a class="" href="service.html">
                Services
              </a>
              <a class="" href="why.html">
                Why Us
              </a>
              <a class="" href="team.html">
                Team
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        WageWatchers Team's
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="{{asset('finexo-html/js/jquery-3.4.1.min.js')}}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="{{asset('finexo-html/js/bootstrap.js')}}"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="{{asset('finexo-html/js/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>