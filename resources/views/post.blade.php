<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials.beranda_head')
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

    p, ul, li, b {
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
</head>

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

    @include('partials.beranda_navbar')

    <section class="slice slice-md bg-section-secondary" id="postdiv">
      <div class="container-swiper-js-container">
        <div class="mb-5 px-3 text-center">
          <div class="container">
            <div class="row" style="padding-top:40px;">
              @foreach($post as $post)
                <div class="col-md-4 mb-4">
                  <div class="card">
                    <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                    
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('partials.beranda_footer')
  </div>

  @include('partials.beranda_script')
</body>

</html>
