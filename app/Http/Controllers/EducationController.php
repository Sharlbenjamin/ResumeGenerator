<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationStoreRequest;
use App\Http\Requests\EducationUpdateRequest;
use App\Models\Education;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EducationController extends Controller
{
    public function index(Request $request): View
    {
        $education = Education::all();

        return view('education.index', compact('education'));
    }

    public function create(Request $request): View
    {
        return view('education.create');
    }

    public function store(EducationStoreRequest $request): RedirectResponse
    {
        $education = Education::create($request->validated());

        $request->session()->flash('education.id', $education->id);

        return redirect()->route('education.index');
    }

    public function show(Request $request, Education $education): View
    {
        return view('education.show', compact('education'));
    }

    public function edit(Request $request, Education $education): View
    {
        return view('education.create', compact('education'));
    }

    public function update(EducationUpdateRequest $request, Education $education): RedirectResponse
    {
        $education->update($request->validated());

        $request->session()->flash('education.id', $education->id);

        return redirect()->route('education.index');
    }

    public function destroy(Request $request, Education $education): RedirectResponse
    {
        $education->delete();

        return redirect()->route('education.index');
    }
}
