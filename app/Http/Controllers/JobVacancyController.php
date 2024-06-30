<?php

namespace App\Http\Controllers;

use App\Models\JobVacancy;
use Illuminate\Http\Request;

class JobVacancyController extends Controller
{
    public function index()
    {
        $job_vacancies = JobVacancy::all();
        return view('admin.job_vacancy.index', compact('job_vacancies'));
    }

    public function create()
    {
        return view('admin.job_vacancy.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'published_at' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/job_vacancy', $image->hashName());

        JobVacancy::create([
            'title' => $request->title,
            'content' => $request->content,
            'published_at' => $request->published_at,
            'image' => $image->hashName(),
        ]);

        return redirect()->route('dashboard.job-vacancy.index')
            ->with('success', 'Job Vacancy created successfully.');
    }

    public function alumniIndex()
    {
        $job_vacancies = JobVacancy::all();
        return view('alumni.job_vacancy.index', compact('job_vacancies'));
    }

    public function alumniShow(JobVacancy $job_vacancy)
    {
        return view('alumni.job_vacancy.show', compact('job_vacancy'));
    }
}
