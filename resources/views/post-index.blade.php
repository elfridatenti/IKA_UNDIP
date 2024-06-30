<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Index</title>
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

    <section class="slice slice-md bg-section-secondary" id="postdiv">
      <div class="container-swiper-js-container">
        <div class="mb-5 px-3 text-center">
          <div class="container">
            @php
              $posts = \App\Models\Post::all();
            @endphp
            @foreach ($post as $post)
            <div class="row" style="padding-top:40px;">
              <div class="col-sm-12 mt-5">
                <div class="text-center mt-3">
                  <div class="head-text mb-4">
                    <h2>{{ $post->title }}</h2>
                  </div>
                </div>
              </div>
              <div class="justified-text">
                {!! $post->content !!}
              </div>
            </div>
            @endforeach
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
