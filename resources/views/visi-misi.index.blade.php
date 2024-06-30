<!DOCTYPE html>
<html lang="en">

<!-- Navbar -->
@include('partials.beranda_head')
<!-- End Navbar -->

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

  p,
  ul,
  li,
  b {
    text-align: left;
  }

  b {
    font-weight: 600;
  }

  .list {
    padding-left: 0px !important;
  }

  .list li {
    gap: 10px;
  }
</style>
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


    <section class="slice slice-md bg-section-secondary" id="aboutdiv">
      <div class="container-swiper-js-container">
        <div class="mb-5 px-3 text-center">
          <div class="container">

            @php
              $post = \App\Models\Post::find(1);
            @endphp
            @if ($post)
            
              <div class="row" style="padding-top:40px;">
                <div class="col-sm-12 mt-5">
                  <div class="text-center mt-3">
                    <div class="head-text mb-4">
                      <h2>{{ $post->title }}</h2>
                    </div>
                  </div>
                </div>
              </div>

              {!! $post->content !!}
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
  @include('partials.beranda_script')
  <!-- End Script -->

</body>

</html>