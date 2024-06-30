@extends('alumni.layout')
@section('content')
  <div class="content">
    <div class="title_area">
      <h3>Lowongan Kerja</h3>
    </div>

    @foreach ($job_vacancies as $item)
      <div class="card_content mt-4">
        <div class="scroll">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                <a href="{{ route('alumni.job-vacancy.show', $item->id) }}">{{ $item->title }}</a>
              </h5>
              <img src="{{ asset('storage/job_vacancy/' . $item->image) }}" alt="{{ $item->title }}" style="width: 250px">
              <p class="card-text">{!! \Str::limit($item->content, 150) !!}</p>
              <p class="card-text"><small class="text-muted">Di Publish Pada {{ $item->created_at->diffForHumans() }}</small></p>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection