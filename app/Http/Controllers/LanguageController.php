<?php

namespace App\Http\Controllers;

use App\Http\Requests\LanguageStoreRequest;
use App\Http\Requests\LanguageUpdateRequest;
use App\Models\Language;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LanguageController extends Controller
{
    public function index(Request $request): View
    {
        $languages = Language::all();

        return view('language.index', compact('languages'));
    }

    public function create(Request $request): View
    {
        return view('language.create');
    }

    public function store(LanguageStoreRequest $request): RedirectResponse
    {
        $language = Language::create($request->validated());

        $request->session()->flash('language.id', $language->id);

        return redirect()->route('languages.index');
    }

    public function show(Request $request, Language $language): View
    {
        return view('language.show', compact('language'));
    }

    public function edit(Request $request, Language $language): View
    {
        return view('language.create', compact('language'));
    }

    public function update(LanguageUpdateRequest $request, Language $language): RedirectResponse
    {
        $language->update($request->validated());

        $request->session()->flash('language.id', $language->id);

        return redirect()->route('languages.index');
    }

    public function destroy(Request $request, Language $language): RedirectResponse
    {
        $language->delete();

        return redirect()->route('languages.index');
    }
}
