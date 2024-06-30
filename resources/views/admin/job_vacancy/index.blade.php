@extends('admin.layout')
@section('content')
  <br>
  <div class="content">
    <div class="title_area">
      <h3>Lowongan Pekerjaan</h3>
    </div>

    <div class="card_content mt-4">

      <div class="scroll">

        <a class="btn btn-sm btn-primary" href="{{ route('dashboard.job-vacancy.create') }}"><i class="fa fa-plus"></i> Tambah</a>

        @if (session()->has('success'))
          <div class="alert alert-success mt-4">
            {{ session('success') }}
          </div>
        @endif
        <div class="table-responsive">

          <table id="myTable_contoh" class="styled-table">
            <!----------------------------------------------------------------------->
            <thead>
              <tr>
                <th>NO</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Di Publish</th>
                <th>Aksi </th>
              </tr>
            </thead>
            <tbody>
              @forelse ($job_vacancies as $jobVacancy)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $jobVacancy->title }}</td>
                  <td>
                    <img src="{{ asset('storage/job_vacancy/' . $jobVacancy->image) }}" alt="{{ $jobVacancy->title }}" style="width: 100px">
                  </td>
                  <td>{{ $jobVacancy->created_at->diffForHumans() }}</td>
                  <td>
                    <a href="{{ route('dashboard.job-vacancy.edit', $jobVacancy->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('dashboard.job-vacancy.destroy', $jobVacancy->id) }}" method="post" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="5" class="text-center">Data tidak ditemukan</td>
                </tr>
              @endforelse
            </tbody>
          </table>

        </div>

      </div>
    </div>
  </div>
@endsection
