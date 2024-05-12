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
                    <div class="head-text mb-4">
                      <h2>Manfaat Keanggotaan</h2>
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

                p, ul, li ,b {
                  text-align: left;
                }

                b {
                  font-weight: 600;
                }

                .list {
                  padding-left: 0px !important;
                }
                .list li {
                  gap : 10px;
                }
              </style>

              <p>
                Kami menyadari bahwa era digital mampu memudahkan mahasiswa dan alumni untuk mendapatkan beragam informasi mengenai peluang karier. Oleh karena itu, kami meluncurkan Aplikasi IKA Undip sebagai platform yang terintegrasi dan memiliki fitur yang lengkap untuk memenuhi pengembangan karier mahasiswa dan alumni UNDIP.
              </p>

              <p>
                Aplikasi IKA Undip tidak hanya memudahkan mahasiswa dan alumni UNDIP dalam mengakses informasi karier tetapi juga mampu memfasilitasi kebutuhan mitra UNDIP. Beragam fitur yang lengkap di Aplikasi IKA Undip akan memudahkan mitra dalam memperoleh talent yang berkualitas.
              </p>

              <p>
                <b>Keunggulan</b>
              </p>

              <ul class="">
                <li>
                  IKA Undip adalah aplikasi Pusat Karier Universitas Diponegoro yang dapat diakses oleh lebih dari 50.000 mahasiswa yang selalu terupdate secara real time. Selain itu, aplikasi ini dapat diakses oleh seluruh alumni UNDIP.
                </li>
                <li>
                  IKA Undip mempermudah Anda dalam mencari talent yang berkualitas dan sesuai kualifikasi. Anda dapat membagikan infomasi rekrutmen, menyelenggarakan campus hiring, career talks, presentasi perusahaan dan juga berpartisipasi dalam Career Fair (Integrated Career Days).
                </li>
                <li>
                  IKA Undip membantu meningkatkan citra (image building) perusahaan Anda di mata mahasiswa dan alumni. Kepercayaan civitas akademika UNDIP terhadap brand perusahaan Anda akan meningkat sehingga lebih menumbuhkan ketertarikan para talent untuk berkarya.
                </li>
              </ul>

              <p>
                <b>Fitur IKA Undip</b>
              </p>

              <ul class="mb-5">
                <li>
                  <b>Posting Lowongan Kerja dan Magang</b>
                  <p>
                    Aplikasi IKA Undip memfasilitasi Anda untuk membagikan berbagai informasi terkait lowongan pekerjaan dan kesempatan magang, serta menjaring talent unggul secara efisien dan tepat sasaran.
                  </p>
                </li>

                <li>
                  <b>Company Talk</b>
                  <p>
                    Kenalkan brand perusahaan Anda kepada mahasiswa dan alumni secara online (daring) maupun offline. Pengaturan jadwal presentasi, kelengkapan fasilitas, dan pemilihan kapasitas ruang akan lebih mudah melalui Aplikasi IKA Undip.
                  </p>
                </li>

                <li>
                  <b>Career Fair</b>
                  <p>Kami telah berpengalaman dalam menyelenggarakan Career Fair (Integrated Career Days) setiap tahun yang dihadiri oleh lebih dari 10.000 talent yang berkualitas. Daftarkan brand perusahaan Anda untuk berpartisipasi dalam Career Fair (Integrated Career Days) hanya melalui Aplikasi IKA Undip</p>
                </li>

                <li>
                  <b>Campus Hiring</b>
                  <p>Aplikasi IKA Undip memudahkan Anda dalam melakukan Campus Hiring meliputi assessment test, tes psikologi, interview, FGD, dan LGD. Anda dapat langsung mengatur penjadwalan campus hiring, desain kegiatan, waktu pelaksanaan, dan fasilitas ruang melalui Aplikasi IKA Undip.</p>
                </li>
              </ul>

              {{-- <p>
                Apabila Anda ingin membuka peluang kerja sama dalam memenuhi kebutuhan sumber daya manusia dan pengembangan inovasi, Anda dapat membuka laman mitra.simaster.UNDIP.ac.id. Jika memerlukan informasi lebih lanjut mengenai kerja sama rekrutmen, Anda dapat menghubungi kami melalui surel setr@UNDIP.ac.id  serta cc ke wrkpma@UNDIP.ac.id dan alumni@UNDIP.ac.id atau telepon (0274) 552810/HP +62 8112582434.
              </p> --}}

                  <div class="row mt-4">

                    <div class="col-md-4">
                      <div class="card border-0 shadow" >
                        <div class="card-body" style="height: inherit !important;">
                          <h5>Lowongan Kerja</h5>
                          <hr class="border border-danger">

                          <ul class="list">
                            <li class="d-flex align-items-center border-bottom pt-2">

                              <img style="width: 100px; height: inherit;" src="{{ asset('images/piranti.jpeg') }}" alt="">

                              <div class="desk">
                                <p class="mb-0" style="font-size: 13px">PT Piranti Husada Tama</p>
                                <p style="font-size: 11px">Lowongan Rabu, 7 Mei 2024</p>
                              </div>
                              
                            </li>

                            <li class="d-flex align-items-center border-bottom pt-2">

                              <img style="width: 100px; height: inherit;" src="{{ asset('images/erpson.jpeg') }}" alt="">

                              <div class="desk">
                                <p class="mb-0" style="font-size: 13px">PT Indonesia Epson Industry</p>
                                <p style="font-size: 11px">Lowongan Rabu, 7 Mei 2024</p>
                              </div>
                              
                            </li>

                            <li class="d-flex align-items-center border-bottom pt-2">

                              <img style="width: 100px; height: inherit;" src="{{ asset('images/harapan.jpeg') }}" alt="">

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
                            <a href="{{ route("signin") }}">Lihat Selengkapnya</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card border-0 shadow" >
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

                              <img style="width: 100px; height: inherit;" src="{{ asset('images/samadia.png') }}" alt="">

                              <div class="desk">
                                <p class="mb-0" style="font-size: 13px">Samadia Solution Group</p>
                                <p style="font-size: 11px">Lowongan Selasa, 30 April 2024</p>
                              </div>
                              
                            </li>

                            <li class="d-flex align-items-center border-bottom pt-2">

                              <img style="width: 100px; height: inherit;" src="{{ asset('images/exxon.png') }}" alt="">

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
                            <a href="{{ route("signin") }}">Lihat Selengkapnya</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card border-0 shadow" >
                        <div class="card-body" style="height: inherit !important;">
                          <h5>Kegiatan Harian</h5>
                          <hr class="border border-danger">

                          <ul class="list">
                            <li class="d-flex align-items-center border-bottom pt-2">

                              <div class="desk">
                                <p class="mb-0" style="font-size: 13px">Pekerjaan</p>
                                <p style="font-size: 11px">Beraktivitas sesuai dengan profesi masing - masing, baik sebagai profesional, enterpreneur atau akademis.</p>
                              </div>
                              
                            </li>

                            <li class="d-flex align-items-center border-bottom pt-2">

                              <div class="desk">
                                <p class="mb-0" style="font-size: 13px">Pendidikan Lanjutan</p>
                                <p style="font-size: 11px">Mengikuti pelatihan, kursus atau seminar untuk meningkatkan keterampilan dan pengetahuan.</p>
                              </div>
                              
                            </li>

                          </ul>

                           <div class="text-right">
                            <a href="{{ route("signin") }}">Lihat Selengkapnya</a>
                          </div>
                        </div>
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
  @include('partials.beranda_script')
  <!-- End Script -->

 

  </body>
</html>