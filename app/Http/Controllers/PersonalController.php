<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalStoreRequest;
use App\Http\Requests\PersonalUpdateRequest;
use App\Models\Personal;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PersonalController extends Controller
{
    public function index(Request $request): View
    {
        $personals = Personal::all();

        return view('personal.index', compact('personals'));
    }

    public function create(Request $request): View
    {
        return view('personal.create');
    }

    public function store(PersonalStoreRequest $request): RedirectResponse
    {
        $personal = Personal::create($request->validated());

        $request->session()->flash('personal.id', $personal->id);

        return redirect()->route('personals.index');
    }

    public function show(Request $request, Personal $personal): View
    {
        return view('personal.show', compact('personal'));
    }

    public function edit(Request $request, Personal $personal): View
    {
        return view('personal.create', compact('personal'));
    }

    public function update(PersonalUpdateRequest $request, Personal $personal): RedirectResponse
    {
        $personal->update($request->validated());

        $request->session()->flash('personal.id', $personal->id);

        return redirect()->route('personals.index');
    }

    public function destroy(Request $request, Personal $personal): RedirectResponse
    {
        $personal->delete();

        return redirect()->route('personals.index');
    }
}
