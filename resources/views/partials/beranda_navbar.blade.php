<header class="site-navbar " role="banner">

      <div class="top-bar">
      <div class="container">
        <div class="row align-items-right">
          
          <div class="col-11 col-xl-2">
            <img src="/images/Logo.png" alt="Image" height="80" width="80">
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="{{ route('beranda') }}">Beranda</a></li>
                <li class="has-children">
                  <a href="#">Tentang</a>
                  <ul class="dropdown">
                    <li><a href="{{ route('about_index') }}">Sejarah</a></li>
                    <li><a href="{{ route('struktur_index') }}">Struktur</a></li>
                    <li><a href="{{ route('post_index') }}">Visi-misi</a></li>
                  </ul>
                </li>
                {{-- <li><a href="{{ route('about_index') }}">About</a></li> --}}
                <li class="has-children">
                  <a href="#">Galeri</a>
                  <ul class="dropdown">
                    <li><a href="{{ route('galery.foto') }}">Galeri Foto</a></li>
                    <li><a href="{{ route('galery.video') }}">Galeri Video</a></li>
                  </ul>
                </li>

                <li class="has-children">
                  <a href="#">Keanggotaan</a>
                  <ul class="dropdown">
                    <li><a href="{{ route('keanggotaan.manfaat') }}">Manfaat Keanggotaan</a></li>
                    <li><a href="{{ route('bergabung.proses') }}">Proses Bergabung</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('alumni.index') }}">Alumni</a></li>
                <li><a href="{{ route('news_index') }}">Berita</a></li>
                <li><a href="{{ route('index_contact') }}">Kontak</a></li>
                <li><a href="{{ route('signin') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Resgiter</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
        </div>
      </div>
      
    </header>