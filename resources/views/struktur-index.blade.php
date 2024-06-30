<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       .justified-text {
            text-align: justify;
        }
        .card-custom {
            margin-bottom: 30px;
            border: none;
        }
        .card-custom img {
            max-height: 150px;
            object-fit: contain;
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px);
            padding: 20px;
        }
        .card-body-custom {
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body style="background: #f8f9fa">
  
  <!-- Navbar -->
  @include('partials.beranda_head')
  <!-- End Navbar -->

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <!-- Navbar -->
    @include('partials.beranda_navbar')
    <!-- End Navbar -->

    <section class="slice slice-md bg-section-secondary" id="quotediv">
      <div class="container-swiper-js-container">
        <div class="mb-5 px-3 text-center">
          <div class="container">
            @php
              $struktur = \App\Models\Struktur::all();
            @endphp
            @if ($struktur)
              <div class="row" style="padding-top:40px;">
                <div class="col-sm-12 mt-5">
                  <div class="text-center mt-3">
                    <div class="head-text mb-4">
                      <h2>Struktur Organisasi</h2>
                    </div>
                  </div>
                </div>
                @foreach ($struktur as $item)
                  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card card-custom shadow-sm">
                      <img src="{{ asset('storage/'. $item->foto) }}" class="card-img-top" alt="Logo Organisasi">
                      <div class="card-body card-body-custom">
                        <h5 class="card-title">{{ $item->nama }}</h5>
                        <p class="card-text">{{ $item->jabatan }}</p>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            @endif
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    @include('partials.beranda_footer')
    <!-- End Footer -->

  </div>

  <!-- Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  @include('partials.beranda_script')
  <!-- End Script -->

</body>
</html>