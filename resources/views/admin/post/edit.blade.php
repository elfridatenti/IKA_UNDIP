@extends('admin.layout')
@section('content')
  <br>
  <div class="content">
    <div class="title_area">
      <h3>Ubah Struktur</h3>
    </div>

    <div class="card_content mt-4">

      <div class="scroll">


        <form action="{{ route('dashboard.struktur.update', $struktur->id) }}" method="post" enctype="multipart/form-data">

          @csrf
          @method('PUT')

          <div class="form-group mb-3">
            <label for="nama">Nama</label>
            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') ?? $struktur->nama }}">
          </div>

          <div class="form-group mb-3">
            <label for="jabatan">Jabatan</label>
            <input id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') ?? $struktur->jabatan }}">
          </div>

          <div class="form-group mb-3">
            <label for="foto">Foto</label>
            <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
            <br>
            <img src="{{ asset('storage/'. $struktur->foto) }}" width="50" height="50">
          </div>

          <a class="btn btn-sm btn-secondary" href="{{ route('dashboard.struktur.index') }}"> Kembali</a>
          <button type="submit" class="btn btn-sm btn-primary">Simpan</button>

        </form>

      </div>

    </div>

  </div>
@endsection