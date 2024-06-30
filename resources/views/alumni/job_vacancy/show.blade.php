@extends('alumni.layout')
@section('content')
  <div class="content">
    <div class="title_area">
      <h3>{{ $job_vacancy->title }}</h3>

      <div class="card_content mt-4">
        <div class="scroll">
          <div class="form-group mb-3">
            <img src="{{ asset('storage/job_vacancy/' . $job_vacancy->image) }}" alt="Job Vacancy Image" style="width: 250px">
            <p>{!! $job_vacancy->content !!}</p>
            <p class="card-text"><small class="text-muted">Di Publish Pada {{ $job_vacancy->created_at->diffForHumans() }}</small></p>

            <a class="btn btn-sm btn-secondary" href="{{ route('alumni.job-vacancy.index') }}"> Kembali</a>
          </div>
        </div>
      </div>
  </div>
@endsection