<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumeStoreRequest;
use App\Http\Requests\ResumeUpdateRequest;
use App\Models\Resume;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ResumeController extends Controller
{
    public function index(Request $request): View
    {
        $resumes = Resume::all();

        return view('resume.index', compact('resumes'));
    }

    public function create(Request $request): View
    {
        return view('resume.create');
    }

    public function store(ResumeStoreRequest $request): RedirectResponse
    {
        $resume = Resume::create($request->validated());

        $request->session()->flash('resume.id', $resume->id);

        return redirect()->route('resumes.index');
    }

    public function show(Request $request, Resume $resume): View
    {
        return view('resume.show', compact('resume'));
    }

    public function edit(Request $request, Resume $resume): View
    {
        return view('resume.create', compact('resume'));
    }

    public function update(ResumeUpdateRequest $request, Resume $resume): RedirectResponse
    {
        $resume->update($request->validated());

        $request->session()->flash('resume.id', $resume->id);

        return redirect()->route('resumes.index');
    }

    public function destroy(Request $request, Resume $resume): RedirectResponse
    {
        $resume->delete();

        return redirect()->route('resumes.index');
    }
}
