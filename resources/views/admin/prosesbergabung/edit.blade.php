@extends('admin.layout')
@section('content')
  <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
  <br>
  <div class="content">
    <div class="title_area">
      <h3>Tambah</h3>
    </div>

    <div class="card_content mt-4">

      <div class="scroll">


        <form action="{{ route('dashboard.prosesbergabung.update', $prosesbergabung->id)}}" method="post">

          @csrf
          @method('PUT')

          <div class="form-group mb-3">
            <label for="title">Judul</label>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $prosesbergabung->title }}">
          </div>

          <div class="form-group mb-3">
            <label for="content">Konten</label>
            <textarea id="content" name="content" class="form-control" rows="10" cols="80">{{ old('content') ?? $prosesbergabung->content }}</textarea>
            <script>
              CKEDITOR.replace('content');
            </script>
          </div>

          <div class="form-group mb-3">
            <label for="slug">Slug</label>
            <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') ?? $prosesbergabung->slug }}">
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
