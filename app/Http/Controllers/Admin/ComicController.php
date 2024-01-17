<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Http\Controllers\Controller;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $comics = Comic::latest()->paginate(5)->onEachSide(2)->appends(request()->query());

        return Inertia::render('Admin/Comic/Index', [
            'comics' => $comics,
            'filters' => request()->all('search'),
            'can' => [
                'create' => Auth::user()->can('comic create'),
                'edit' => Auth::user()->can('comic edit'),
                'delete' => Auth::user()->can('comic delete'),
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Comic/Create');
    }


    public function store(Request $request)
    {
        Comic::create($request->all());

        return redirect()->route('comics.index')
                        ->with('message', __('Comic created successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Inertia\Response
     */
    public function edit(Comic $comic)
    {
        return Inertia::render('Admin/Comic/Edit', [
            'comic' => $comic,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Comic $comic)
    {
        $comic->update($request->all());

        return redirect()->route('comics.index')
                        ->with('message', __('Comic updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')
                        ->with('message', __('Comic deleted successfully.'));
    }
}