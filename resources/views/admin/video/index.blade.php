@extends('admin.layout')
@section('content')
<br>
<div class="content">
  <div class="title_area">
      <h3><span>Data Gallery Video</span></h3>
  </div>

<div class="card_content mt-4">

<div class="scroll">

  <a class="btn btn-sm btn-primary" href="{{ route('dashboard.video.create') }}"><i class="fas fa-newspaper"></i> Tambah</a>

  @if(session()->has('success'))
    <div class="alert alert-success mt-4">
      {{ session('success') }}
    </div>
  @endif

  <div class="table-responsive">

	<table id="myTable_contoh" class="styled-table">    
		<!----------------------------------------------------------------------->
		<thead>		
				<tr>
          <th>No</th>
          <th>Nama Kegiatan</th>
          <th>Desk</th>
          <th>Cover</th>
					<th>Aksi </th>
				</tr>
		</thead>
    <tbody>
        @foreach ($data as $item)
          <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$item->nama}}</td>
              <td>{{$item->desk}}</td>
              <td>
                <img src="{{ asset('cover/' . $item->cover) }}" alt="" style="width: 100px">
              </td>
              <td>
                <a href="{{ route('dashboard.video.edit', $item->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                <a href="{{ route('dashboard.video.list.index', $item->id) }}" class="btn btn-sm btn-primary">List Video</a>
                <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus?')" action="{{ route('dashboard.video.destroy', $item->id) }}" class="d-inline" method="POST">
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