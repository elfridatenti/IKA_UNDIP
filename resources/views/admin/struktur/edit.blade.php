@extends('admin.layout')
@section('content')
<br>
<div class="content">
  <div class="title_area">
    <h3>Edit Struktur Organisasi</h3>
  </div>

  <div class="card_content mt-4">
    <form action="{{ route('dashboard.struktur.update', $struktur->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama', $struktur->nama) }}" required>
      </div>
      <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" name="foto" class="form-control-file" id="foto">
        @if($struktur->foto)
          <img src="{{ asset('storage/' . $struktur->foto) }}" alt="{{ $struktur->nama }}" width="100" class="mt-2">
        @endif
      </div>
      <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{ old('jabatan', $struktur->jabatan) }}" required>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>
@endsection
