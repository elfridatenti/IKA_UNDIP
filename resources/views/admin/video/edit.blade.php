@extends('admin.layout')
@section('content')

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<br>
<div class="content">
  <div class="title_area">
      <h3><span>Edit Gallery Video</span></h3>
  </div>

  <div class="card_content mt-4">

    <div class="scroll">


      <form action="{{ route('dashboard.video.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method("put")

        <div class="form-group mb-3">
          <label for="">Nama Kegiatan</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $gallery->nama) }}">
        </div>

        <div class="form-group mb-3">
          <label for="">Deskripsi Singkat</label>
          <input type="text" class="form-control @error('desk') is-invalid @enderror" name="desk" value="{{ old('desk', $gallery->desk) }}">
        </div>

        <div class="form-group mb-3">
          <label for="">Gambar Cover Baru</label>
          <input type="file" class="form-control @error('cover') is-invalid @enderror" name="cover">
        </div>

      <a class="btn btn-sm btn-secondary" href="{{ route('dashboard.video.index') }}"> Kembali</a>
      <button type="submit" class="btn btn-sm btn-primary">Simpan</button>

      </form>

    </div>

  </div>

</div>
@endsection