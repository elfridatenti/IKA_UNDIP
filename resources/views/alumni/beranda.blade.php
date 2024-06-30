@extends('alumni.layout')
@section('content')
{{-- import jquery --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!---->
      <div class="content">
  <div class="title_area">
      <h3> <span>Profile Alumni</span></h3>
  </div>
<br>
<div class="card_content" style="display: flex; justify-content: space-between; align-items: center; border-radius: 10px;background-color: #f0f0f0;">
        <table>
          <tr>
              <td class="label1">Nama Lengkap</td>
              <td>
                {{ $data_diri->nama_lengkap }}
              </td>
          </tr>
          <tr>
            <td class="label1">No.Tlp</td>
            <td>
              {{ $data_diri->no_telp }}
              </td>
          </tr>
          <tr>
              <td class="label1">NIM</td>
              <td>
                {{ $alumni->nim }}
              </td>
          </tr>
          <tr>
              <td class="label1">Tahun Lulus</td>
              <td>
                {{ $alumni->tahun_lulus }}
              </td>
          </tr>
          <tr>
              <td class="label1">Jurusan</td>
              <td>
                {{ $alumni->jurusan }}
              </td>
          </tr>
          <tr>
              <td class="label1">Profesi</td>
              <td>
                {{ $alumni->profesi }}
              </td>
          </tr>
          <tr>
              <td class="label1">Nama Instansi</td>
              <td>
                {{ $alumni->nama_instansi }}
              </td>
          </tr>
          <tr>
            <td class="label1">Alamat Instansi</td>
            <td>
              {{$alumni->alamat}}
            </td>
          <tr>
              <td class="label1">Alamat Saat Ini</td>
              <td>
                {{ $data_diri->alamat }}
              </td>
          </tr>
          <tr> 
            <td class="label1">Kota</td>
            <td>
              {{$alumni->kota}}
            </td>
          </tr>
        </table>

        <div class="image-container" style="width: 50%; height: 100%; overflow: hidden;">
    <img src="{{ asset('assets/' . $alumni->foto) }}" style="width: 100%; height: auto; object-fit: cover;" alt="">
</div>

</div>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Edit Profil
</button>
  
</div>
      
{{-- <div class='content'></div> --}}

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Profil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form" action="{{ route('alumni.profile.update', $alumni->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="data-diri" data-bs-toggle="tab" data-bs-target="#data-diri-pane" type="button" role="tab" aria-controls="data-diri-pane" aria-selected="true">Data Diri</button>
            </li>
             <li class="nav-item" role="presentation">
              <button class="nav-link" id="data-alumni" data-bs-toggle="tab" data-bs-target="#data-alumni-pane" type="button" role="tab" aria-controls="data-alumni-pane" aria-selected="false">Data Alumni</button>
            </li> 
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="data-diri-pane" role="tabpanel" aria-labelledby="data-diri" tabindex="0">
              <div class="mb-3 mt-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ $data_diri->nama_lengkap }}">
              </div>
              <div class="mb-3">
                <label for="no_ktp" class="form-label">No. KTP</label>
                <input type="number" class="form-control" id="no_ktp" name="no_ktp" value="{{ $data_diri->no_ktp }}">
              </div>
              <div class="mb-3">
                <label for="no_telp" class="form-label">No. Telp</label>
                <input type="number" class="form-control" id="no_telp" name="no_telp" value="{{ $data_diri->no_telp }}">
              </div>
              <div class="mb-3">
                <label for="ibu_kandung" class="form-label">Nama Ibu Kandung</label>
                <input type="text" class="form-control" id="ibu_kandung" name="ibu_kandung" value="{{ $data_diri->ibu_kandung }}">
              </div>
              <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jk" name="jk">
                  <option value="Laki - Laki" {{ $data_diri->jk == 'Laki - Laki' ? 'selected' : '' }}>Laki - Laki</option>
                  <option value="Perempuan" {{ $data_diri->jk == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $data_diri->tempat_lahir }}">
              </div>
              <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $data_diri->tanggal_lahir }}">
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ $data_diri->alamat }}</textarea>
              </div>
            </div>
            <div class="tab-pane fade" id="data-alumni-pane" role="tabpanel" aria-labelledby="data-alumni" tabindex="0">
              <div class="mb-3 mt-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim" value="{{ $alumni->nim }}">
              </div>
              <div class="mb-3">
                <label for="angkatan" class="form-label">Angkatan</label>
                <input type="number" class="form-control" id="angkatan" name="angkatan" value="{{ $alumni->angkatan }}">
              </div>
              <div class="mb-3">
                <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                <input type="number" class="form-control" id="tahun_lulus" name="tahun_lulus" value="{{ $alumni->tahun_lulus }}">
              </div>
              <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $alumni->jurusan }}">
              </div>
              <div class="mb-3">
                <label for="profesi" class="form-label">Profesi</label>
                <input type="text" class="form-control" id="profesi" name="profesi" value="{{ $alumni->profesi }}">
              </div>
              <div class="mb-3">
                <label for="nama_instansi" class="form-label">Nama Instansi</label>
                <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" value="{{ $alumni->nama_instansi }}">
              </div>
              <div class="mb-3">
                <label for="alamat_instansi" class="form-label">Alamat Instansi</label>
                <input type="text" class="form-control" id="alamat_instansi" name="alamat_instansi" value="{{ $alumni->alamat }}">
              </div>
              <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota" name="kota" value="{{ $alumni->kota }}">
              </div>
              <div class="mb-3">
                <label for="ijazah" class="form-label">Ijazah</label>
                <input type="file" class="form-control" id="ijazah" name="ijazah">
                <img src="{{ asset('assets/' . $alumni->ijazah) }}" width="100px" alt="">
              </div>
              <div class="mb-3">
                <label for="ktp" class="form-label">KTP</label>
                <input type="file" class="form-control" id="ktp" name="ktp">
                <img src="{{ asset('assets/' . $alumni->ktp) }}" width="100px" alt="">
              </div>
              <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
                <img src="{{ asset('assets/' . $alumni->foto) }}" width="100px" alt="">
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>

    </div>
  </div>
</div>

<script>
  // submit
  $(document).ready(function() {
    $('#form').submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
          Swal.fire({
            title: "Berhasil!",
            text: 'Data berhasil diubah!',
            icon: "success"
          }).then(() => {
            location.reload();
          });
        },
        error: function(xhr) {
          var res = xhr.responseJSON;
          
          alert(res.message);
        }
      });
    });


    // Check if session has success
    @if (session()->has('success'))
      Swal.fire({
        title: "Berhasil!",
        text: "{{ session('success') }}",
        icon: "success"
      });
    @endif
    
  });
</script>
@endsection