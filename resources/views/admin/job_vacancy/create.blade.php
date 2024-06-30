@extends('admin.layout')
@section('content')
  <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
  <br>
  <div class="content">
    <div class="title_area">
      <h3>Tambah Lowongan Pekerjaan</h3>
    </div>

    <div class="card_content mt-4">

      <div class="scroll">


        <form action="{{ route('dashboard.job-vacancy.store') }}" method="POST" enctype="multipart/form-data">

          @csrf

          <div class="form-group mb-3">
            <label for="title">Judul</label>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
          </div>

          <div class="form-group mb-3">
            <label for="content">Konten</label>
            <textarea id="content" name="content" class="form-control" rows="10" cols="80">{{ old('content') }}</textarea>
            <script>
              CKEDITOR.replace('content');
            </script>
          </div>

          <div class="form-group mb-3">
            <label for="slug">Di Publish Pada</label>
            <input id="published_at" type="datetime-local" class="form-control @error('published_at') is-invalid @enderror" name="published_at" value="{{ old('published_at') }}">
          </div>

          <div class="form-group mb-3">
            <label for="image">Foto</label>
            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <a class="btn btn-sm btn-secondary" href="{{ route('dashboard.profile_alumni.index') }}"> Kembali</a>
          <button type="submit" class="btn btn-sm btn-primary">Simpan</button>

        </form>

      </div>

    </div>

  </div>
  <script>
    // make slug depend on title
    document.getElementById('title').addEventListener('input', function() {
      document.getElementById('slug').value = this.value.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
    });
  </script>
@endsection
