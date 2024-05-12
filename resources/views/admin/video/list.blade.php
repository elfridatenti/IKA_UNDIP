@extends('admin.layout')
@section('content')
<br>
<div class="content">
  <div class="title_area">
      <h3><span>Gallery Video {{ $gallery->nama }}</span></h3>
  </div>

<div class="card_content mt-4">

<div class="scroll">


  @if(session()->has('success'))
    <div class="alert alert-success mt-4">
      {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('dashboard.video.list.store', $id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
      <label for="">Video</label>
      <input type="file" class="form-control @error('item') is-invalid @enderror" name="item" value="{{ old('item') }}">
    </div>
    <a class="btn btn-sm btn-secondary" href="{{ route('dashboard.video.index') }}" >Kembali</a>
    <button class="btn btn-sm btn-primary">Upload</button>
  </form>

  <div class="table-responsive">

	<table id="myTable_contoh" class="styled-table">    
		<!----------------------------------------------------------------------->
		<thead>		
				<tr>
          <th>Video</th>
					<th>Aksi </th>
				</tr>
		</thead>
    <tbody>
        @foreach ($data as $item)
          <tr>
              <td>
                <video width="100">
                  <source src="{{ asset('cover/' . $item->item) }}" type="video/mp4">  
                  <source src="{{ asset('cover/' . $item->item) }}" type="video/ogg">  
                </video>
              </td>
              <td>
                <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus?')" action="{{ route('dashboard.video.list.destroy', [$id, $item->id]) }}" class="d-inline" method="POST">
                  @csrf
                  @method("delete")

                  <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
    
  </div>

</div>
</div>
</div>
@endsection