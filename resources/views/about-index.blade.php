<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .justified-text {
            text-align: justify;
        }
    </style>
</head>
<body style="background: #ffffff">
  
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
        $about_index = \App\Models\About::first();
        @endphp
        @if ($about_index)
        <div class="row" style="padding-top:40px;">
          <div class="col-sm-12 mt-5">
            <div class="text-center mt-3">
              <div class="head-text mb-4">
                <h2>{{ $about_index->title }}</h2>
              </div>
            </div>
          </div>
          <div class="justified-text">
            {!! $about_index->content !!}
          </div>
        @endif

            {{-- @php
            $about_index = \App\Models\About::first();
                
            @endphp
            @if ($about_index)
            <div class="row" style="padding-top:40px;">
              <div class="col-sm-12 mt-5">
                <div class="text-center mt-3">
                  <div class="head-text mb-4">
                    <h2>{{ $about_index->title }}</h2>
                  </div>
                </div>
              </div>
              <div class="justified-text">
                {!! $about_index->content !!}
              </div>
            @endif
            </div> --}}
          </div>
          </div>
        </div>
        
      </div>

            

                                                
                              
     
                    {{-- <div class="container">
                        <h2>Daftar Ketua IKA UNDIP</h2>
                    </div>
                    <div class="row" style="padding-top:40px;">
                      <main>
                        <div class="mb-5 px-3 text-center">
                        <div class="row form-group xs-mb-2">
                          <div class="col-sm-4 col-8">
                            <img src="https://ikaundip.org/assets/frontend/common/images/background_avatar.jpg" width="100%" alt="Avatar">
                          </div>
                          <div class="col-sm-8 col-12">
                            <div class="table-responsive">
                              <table width="100%" class="table-daftar">
                                <tbody>
                                  <tr>
                                    <td width="35%">Nama</td>
                                    <td>:</td>
                                    <td>contoh</td>
                                  </tr>
                                  <tr>
                                    <td width="35%">Pekerjaan</td>
                                    <td>:</td>
                                    <td>-</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </main> --}}
                    </div>
                  </div>
                </div>
              </div>
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