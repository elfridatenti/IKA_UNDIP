<!DOCTYPE html>
<html lang="en">
  
  <!-- Navbar -->
  @include('partials.beranda_head')
  <!-- End Navbar -->

  <body>
  
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
       
              <div class="row" style="padding-top:40px;">
                <div class="col-sm-12 mt-5">
                  <div class="text-center mt-3">
                    <div class="head-text">
                      <h2>Gallery Foto </h2>
                    </div>
                  </div>
                </div>
              </div>

              <style>
                .card-img-top {
                  width: 100%;
                  height: 150px;
                  background: #eaeaea;
                  
                }

                .card-body {
                  height: 175px !important;
                }

                .card-title {
                  font-size: 15px !important;
                }
              </style>

              <div class="row mt-4">

                @foreach($data as $item)

                <div class="col-md-3 mb-4">

                    <div class="card border-0 shadow">
                      <div class="card-img-top" style="background: url({{ asset('cover/' . ($item->cover) ) }}); background-size: cover;
                  background-position: center;"></div>
                      <div class="card-body text-left">
                        <h5 class="card-title text-dark mb-2">{{ ($item->nama) }}</h5>
                        <p class="text-dark" style="font-size: 12px">{{ $item->desk }}</p>

                        <a href="{{ route('galery.foto.detail', $item->id) }}" class="btn p-1" style="font-size: 12px">Lihat Foto</a>
                      </div>
                    </div>

                </div>

                @endforeach
 
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
  @include('partials.beranda_script')
  <!-- End Script -->

 

  </body>
</html>