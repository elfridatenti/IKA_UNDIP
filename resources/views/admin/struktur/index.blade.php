@extends('admin.layout')
@section('content')
  <br>
  <div class="content">
    <div class="title_area">
      <h3>Data Struktur</h3>
    </div>

    <div class="card_content mt-4">
      <div class="scroll">
        <a class="btn btn-sm btn-primary" href="{{ route('dashboard.struktur.create') }}"><i class="fa fa-plus"></i> Tambah</a>

        @if (session()->has('success'))
          <div class="alert alert-success mt-4">
            {{ session('success') }}
          </div>
        @endif

        <div class="table-responsive">
          <table id="myTable_contoh" class="styled-table">
            <thead>
              <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Foto</th>
                <th>Aksi</th>
                
              </tr>
            </thead>
            <tbody>
              @forelse ($struktur as $struktur)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $struktur->nama }}</td>
                  <td>{{ $struktur->jabatan }}</td>
                  <td><img src="{{ asset('storage/'. $struktur->foto) }}" width="50" height="50"></td>
                  <td>
                    <a href="{{ route('dashboard.struktur.edit', $struktur->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('dashboard.struktur.destroy', $struktur->id) }}" method="post" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="5" class="text-center">Belum ada data</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection