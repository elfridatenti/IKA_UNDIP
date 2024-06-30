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


    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" data-interval="2000">
          <img src="/images/kuda.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 style="font-family: '', sans-serif; font-size: 70px; text-align: high-center; padding-bottom:300px;">ALUMNI IKA UNDIP <br>Kepulauan Riau</h1>
            <p> slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-interval="2000">
          <img src="/images/5.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 style="font-family: 'italic', sans-serif; font-size: 70px; text-align: high-center; padding-bottom:300px;">ALUMNI IKA UNDIP <br>Kepulauan Riau</h1>
            <p>slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-interval="2000">
          <img src="/images/1.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 style="font-family: 'italic', sans-serif; font-size: 70px; text-align: down-center; padding-bottom:300px;">ALUMNI IKA UNDIP <br>Kepulauan Riau</h1>
            <p> slide.</p>
          </div>
        </div>
      </div>
    </div>

    
    <script>
      $(document).ready(function(){
          $('.carousel-item').carousel({
            interval: 2000
          });
      });
    </script>

    <!--ehhe-->
    <div class="container">
       
          <div class="row" style="padding-top:125px;">
            <div class="col-sm-12">
              <div class="text-center">
                <div class="head-text">
                  <h2 class="font-weight-bold" style="color:#121629">IKA UNDIP Official Website</h2>
            <p style="font-size: 20px;">adalah portal Ikatan Alumni Universitas Diponegoro sebagai media silaturahmi, komunikasi,dan informasi sesama alumni Universitas Diponegoro di manapun berada.</p>
          </div> 
         </div>    
        </div> 
       </div>    
      </div>
    </div> 
    <section id="berita">
  <div class="container ">
    <div class="header-berita text-center">
      <h2 class="font-weight-bold" style="color:#121629">Profile Alumni</h2>
    </div>
    <div class="row mt-4">

                @foreach($alumni as $items)

                <div class="col-md-4 mb-4">
                  <a href="/alumni/{{$items->id}}">
                    <div class="card border-0 shadow">
                      <img src="{{ asset('assets/' . ($items->img) ) }}" class="card-img-top" alt="">
                      <div class="card-body text-left">
                        <h5 class="card-title text-dark mb-0">{{ ($items->nama) }}</h5>
                        <p class="text-dark">{{ $items->jurusan }} Lulus {{ $items->tahun_lulus }}</p>
                      </div>
                    </div>
                  </a>

                </div>

                @endforeach
 
              </div>
    
  <div class="row justify-content-center" >
    <div class="col-md-12 text-center">
      <a href="{{ route('alumni.index') }}" class="btn" style="margin-bottom: 80px;">Selanjutnya...</a>
    </div>
  </div>
</section>
     

    <!--end of hehe-->
    <!--nvm lol-->
    <section class="pb_section ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md mt-3 pr-md-5 pr-sm-0 feature-4">
            <div class="media pb_media_v2 d-block text-center mb-3">
              <div class="media-body">
                <h2 class="mt-0 pb_font-20" style="color:#232946">Visi</h2>
                <p>Menjadi wadah yang solid dan inspiratif bagi alumni Universitas Diponegoro untuk berkontribusi dalam pembangunan bangsa dan kesejahteraan masyarakat.</p>
              </div>
            </div>
          </div>
          <div class="col-md mt-3 pr-md-5 pr-sm-0 feature-4">
            <div class="media pb_media_v2 d-block text-center  mb-3">
              <div class="media-body">
                <h2 class="mt-0 pb_font-20" style="color:#232946">Misi</h2>
                <p>IKA UNDIP bertujuan untuk memperkuat ikatan antar alumni dari berbagai angkatan dan jurusan melalui jaringan komunikasi yang efektif serta berbagai kegiatan reuni dan sosial. Mereka mendukung pengembangan karier dengan menyediakan platform informasi tentang peluang kerja, pelatihan, dan seminar yang relevan. IKA UNDIP juga aktif dalam menginisiasi dan mendukung program-program sosial yang berdampak positif bagi masyarakat, serta berperan dalam meningkatkan kualitas pendidikan dan penelitian di Universitas Diponegoro melalui penggalangan dana dan dukungan untuk fasilitas universitas. Mereka bekerja sama dengan mahasiswa aktif untuk memberikan mentoring, bimbingan karier, dan dukungan akademis, sambil mendorong nilai-nilai nasionalisme dan integritas dalam kegiatan mereka.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- {--berita--} --}}
<section id="berita">
  <div class="container ">
    <div class="header-berita text-center">
      <h2 class="font-weight-bold" style="color:#121629">Berita Kegiatan IKA UNDIP KEPRI</h2>
    </div>
     <div class="row py-5">
      @foreach($news as $item)
      <div class="col-lg-4">
        <div class="card border-0">          
        <img src="{{ asset('storage/news/' . $item->image) }}" style="height: 200px; object-fit: cover; width: 100%;" class="img-fluid mb-3" alt="">
          <div class="konten-berita">
            <p class="mb-3 text-secondary">{{$item->date}}</p>
            <h4 class="fw-bold mb-3"><a href="{{ route('news', $item->slug) }}">{{$item->title}}</a></h4>
            <p>{!! Str::limit(strip_tags($item->content), 100) !!}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="footer-berita text-center">
      <a href="{{ route('news_index') }}" class="btn" style="margin-bottom: 50px">Berita Lainnya...</a>
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