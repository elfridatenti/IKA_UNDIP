@extends('admin.layout')
@section('content')

<br>
<div class="content">
  <div class="title_area">
      <h3><span>Tambah Galery Video</span></h3>
  </div>

  <div class="card_content mt-4">

    <div class="scroll">


      <form action="{{ route('dashboard.video.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="form-group mb-3">
          <label for="">Nama Kegiatan</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}">
        </div>

        <div class="form-group mb-3">
          <label for="">Deskripsi Singkat</label>
          <input type="text" class="form-control @error('desk') is-invalid @enderror" name="desk" value="{{ old('desk') }}">
        </div>

        <div class="form-group mb-3">
          <label for="">Gambar Cover</label>
          <input type="file" class="form-control @error('cover') is-invalid @enderror" name="cover" value="{{ old('cover') }}">
        </div>

        <a class="btn btn-sm btn-secondary" href="{{ route('dashboard.video.index') }}"> Kembali</a>
        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>

      </form>

    </div>

  </div>

</div>
@endsection