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


    <section class="slice slice-md bg-section-secondary" id="quotediv">
      <div class="container-swiper-js-container">
        <div class="mb-5 px-3 text-center">
          <div class="container">

            @php
              $prosesbergabung = \App\Models\Prosesbergabung::find(1);
            @endphp
            @if ($prosesbergabung)
              <div class="row" style="padding-top:40px;">
                <div class="col-sm-12 mt-5">
                  <div class="text-center mt-3">
                    <div class="head-text mb-4">
                      <h2>{{ $prosesbergabung->title }}</h2>
                    </div>
                  </div>
                </div>
              </div>

              {!! $prosesbergabung->content !!}
            @endif


            
            @auth
              <div class="row mt-4">

                <div class="col-md-4">
                  <div class="card border-0 shadow">
                    <div class="card-body" style="height: inherit !important;">
                      <h5>Lowongan Kerja</h5>
                      <hr class="border border-danger">

                      <ul class="list">
                        <li class="d-flex align-items-center border-bottom pt-2">

                          <img style="width: 100px; height: inherit;" src="{{ asset('images/piranti.jpeg') }}"
                            alt="">

                          <div class="desk">
                            <p class="mb-0" style="font-size: 13px">PT Piranti Husada Tama</p>
                            <p style="font-size: 11px">Lowongan Rabu, 7 Mei 2024</p>
                          </div>

                        </li>

                        <li class="d-flex align-items-center border-bottom pt-2">

                          <img style="width: 100px; height: inherit;" src="{{ asset('images/erpson.jpeg') }}"
                            alt="">

                          <div class="desk">
                            <p class="mb-0" style="font-size: 13px">PT Indonesia Epson Industry</p>
                            <p style="font-size: 11px">Lowongan Rabu, 7 Mei 2024</p>
                          </div>

                        </li>

                        <li class="d-flex align-items-center border-bottom pt-2">

                          <img style="width: 100px; height: inherit;" src="{{ asset('images/harapan.jpeg') }}"
                            alt="">

                          <div class="desk">
                            <p class="mb-0" style="font-size: 13px">Sekolah Kristen Harapan Bangsa Balikpapan</p>
                            <p style="font-size: 11px">Lowongan Rabu, 7 Mei 2024</p>
                          </div>

                        </li>

                        <li class="d-flex align-items-center border-bottom pt-2">

                          <img style="width: 100px; height: inherit;" src="{{ asset('images/sim.jpeg') }}" alt="">

                          <div class="desk">
                            <p class="mb-0" style="font-size: 13px">PT Swakarya Insan Mandiri</p>
                            <p style="font-size: 11px">Lowongan Rabu, 7 Mei 2024</p>
                          </div>

                        </li>


                      </ul>

                      <div class="text-right">
                        <a href="{{ route('signin') }}">Lihat Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card border-0 shadow">
                    <div class="card-body" style="height: inherit !important;">
                      <h5>Lowongan Magang</h5>
                      <hr class="border border-danger">

                      <ul class="list">
                        <li class="d-flex align-items-center border-bottom pt-2">

                          <img style="width: 100px; height: inherit;" src="{{ asset('images/rsm.png') }}" alt="">

                          <div class="desk">
                            <p class="mb-0" style="font-size: 13px">RSM Indonesia</p>
                            <p style="font-size: 11px">Lowongan Rabu, 24 April 2024</p>
                          </div>

                        </li>

                        <li class="d-flex align-items-center border-bottom pt-2">

                          <img style="width: 100px; height: inherit;" src="{{ asset('images/samadia.png') }}"
                            alt="">

                          <div class="desk">
                            <p class="mb-0" style="font-size: 13px">Samadia Solution Group</p>
                            <p style="font-size: 11px">Lowongan Selasa, 30 April 2024</p>
                          </div>

                        </li>

                        <li class="d-flex align-items-center border-bottom pt-2">

                          <img style="width: 100px; height: inherit;" src="{{ asset('images/exxon.png') }}"
                            alt="">

                          <div class="desk">
                            <p class="mb-0" style="font-size: 13px">Exxon Mobil Indonesia</p>
                            <p style="font-size: 11px">Lowongan Selasa, 16 April 2024</p>
                          </div>

                        </li>



                        <li class="d-flex align-items-center border-bottom pt-2">

                          <img style="width: 100px; height: inherit;" src="{{ asset('images/mufg.png') }}" alt="">

                          <div class="desk">
                            <p class="mb-0" style="font-size: 13px">MUFG Bank</p>
                            <p style="font-size: 11px">Lowongan Kamis, 28 April 2024</p>
                          </div>

                        </li>


                      </ul>

                      <div class="text-right">
                        <a href="{{ route('signin') }}">Lihat Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card border-0 shadow">
                    <div class="card-body" style="height: inherit !important;">
                      <h5>Kegiatan Harian</h5>
                      <hr class="border border-danger">

                      <ul class="list">
                        <li class="d-flex align-items-center border-bottom pt-2">

                          <div class="desk">
                            <p class="mb-0" style="font-size: 13px">Pekerjaan</p>
                            <p style="font-size: 11px">Beraktivitas sesuai dengan profesi masing - masing, baik sebagai
                              profesional, enterpreneur atau akademis.</p>
                          </div>

                        </li>

                        <li class="d-flex align-items-center border-bottom pt-2">

                          <div class="desk">
                            <p class="mb-0" style="font-size: 13px">Pendidikan Lanjutan</p>
                            <p style="font-size: 11px">Mengikuti pelatihan, kursus atau seminar untuk meningkatkan
                              keterampilan dan pengetahuan.</p>
                          </div>

                        </li>

                      </ul>

                      <div class="text-right">
                        <a href="{{ route('signin') }}">Lihat Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            @endauth


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
