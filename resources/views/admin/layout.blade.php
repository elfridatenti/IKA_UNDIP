<!DOCTYPE html>
<html>
  <head>
  <link rel="icon web" href="Logo.png">
    <title>Admin</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/icon/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
      .bg-custom {
          background-color: #232946;
      }
  </style>

  </head>
<body>
<!--------------------------------------------------------------------->
    <input type="checkbox" id="check">
		<header>
    </div>
    
		</header>
      <div class='sidebar'>
        <label for='check'>
          <i class='fas fa-bars sidebar_btn' id='sidebar_btn'></i>
          <i href='' id='admin'>Ika Undip</i>
        <!--  <i id='admin'>Ika Undip</i> -->
        </label>
        
        <li><a href="#"><i class="fas fa-home"></i> DASHBOARD</a></li>
        <a href="{{ route('dashboard.news.index') }}" class="{{ request()->is('dashboard/news*') ? 'bg-primary' : '' }}"><i class='fas fa-newspaper'></i><span> Data Berita</span></a>
        <a href='{{ route('dashboard.alumni.index') }}' class="{{ request()->is('dashboard/alumni*') ? 'bg-primary' : '' }}"><i class='fas fa-graduation-cap'></i><span> Data Alumni</span></a>
        <a href='{{ route('dashboard.profile_alumni.index') }}' class="{{ request()->is('dashboard/profile_alumni*') ? 'bg-primary' : '' }}"><i class='fas fa-graduation-cap'></i><span> Data Profile Alumni</span></a>
        
        <a class="{{ request()->is('dashboard/foto*') ? 'bg-primary' : '' }}" href='{{ route('dashboard.foto.index') }}'><i class='fas fa-image'></i><span> Data Gallery Foto</span></a>
        <a class="{{ request()->is('dashboard/video*') ? 'bg-primary' : '' }}" href='{{ route('dashboard.video.index') }}'><i class='fas fa-image'></i><span> Data Gallery Video</span></a>
        <a href="{{route('dashboard.contact.index') }}" class="{{request()->is('dashboard/contact*') ? 'bg-primary' : ''}}"><i class='fas fa-graduation-cap'></i>Data Contact</span></a>
        <a href='{{ route('dashboard.article.edit', '1') }}'><i class='fas fa-user'></i><span> Manfaat Keanggotaan</span></a>
        <a href='{{ route('dashboard.prosesbergabung.edit', '1') }}'><i class='fas fa-flag'></i><span> Proses Bergabung</span></a>
        <a href='{{ route('dashboard.post.index' ) }}'><i class='fas fa-flag'></i><span> Visi-misi</span></a>
        <a href='{{ route('dashboard.struktur.index' ) }}'><i class='fas fa-users'></i><span> Struktur</span></a>

        <a href="{{ route('dashboard.about.index') }}" class="{{ request()->is('dashboard/about*') ? 'bg-primary' : '' }}"><i class='fas fa-info-circle'></i><span> Tentang Kami</span></a>
        {{-- <a href='{{ route('dashboard.article.edit', '2') }}'><i class='fas fa-user'></i><span> Manfaat 2</span></a> --}}
        
        <a href='{{ route('dashboard.job-vacancy.index') }}' class="{{ request()->is('dashboard/job-vacancy*') ? 'bg-primary' : '' }}"><i class='fas fa-user'></i><span> Lowongan Pekerjaan</span></a>

        <a href="/logout" class="btn_logout" style="color:#121629">Logout <i class="fas fa-sign-out-alt"></i></a>
      </div>
      
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>