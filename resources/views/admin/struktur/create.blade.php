@extends('admin.layout')
@section('content')
<br>
<div class="content">
  <div class="title_area">
    <h3>Tambah Struktur Organisasi</h3>
  </div>

  <div class="card_content mt-4">
    <form action="{{ route('dashboard.struktur.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ old('nama') }}" required>
        @error('nama')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" name="foto" class="form-control-file @error('foto') is-invalid @enderror" id="foto">
        @error('foto')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" value="{{ old('jabatan') }}" required>
        @error('jabatan')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>
@endsection