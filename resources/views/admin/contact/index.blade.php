@extends('admin.layout')
@section('content')
  <br>
  <div class="content">
    <div class="title_area">
      <h3>Data Contact</h3>
    </div>

    <div class="card_content mt-4">
    <div>
	<div class="search-box ">
    <form action="" method="get">
      <div class="input-group ">
        <button class="input-group-text">Search</button>
		    <input type="text" name="keyword" id="keyword" onkeyup="myFunction()" class="form-control" placeholder="Search for names..">
      <div>
      </form>
  </div>
  </div>
      <div class="scroll">

        

        @if (session()->has('success'))
          <div class="alert alert-success mt-4">
            {{ session('success') }}
          </div>
        @endif
        <div class="table-responsive">

          <table id="myTable_contoh" class="styled-table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($contacts as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->subject}}</td>
                    <td style="white-space: pre-line;">{{$data->message}}</td>
                    <td>
                      <form style="display: inline-block" action="/contact-delete/{{$data->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn_hapus_merah">Delete</button>
                      </form>
                    </td>
                </tr>
              @empty
                <tr>
                  <td colspan="6" class="text-center">Belum ada data</td>
                </tr>
              @endforelse
            </tbody>
          </table>

        </div>

      </div>
    </div>
  </div>
@endsection
