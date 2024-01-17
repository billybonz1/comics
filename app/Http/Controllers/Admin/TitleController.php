<?php

namespace App\Http\Controllers\Admin;

use App\Models\Title;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $titles = Title::latest()->paginate(5)->onEachSide(2)->appends(request()->query());

        return Inertia::render('Admin/Title/Index', [
            'titles' => $titles,
            'filters' => request()->all('search'),
            'can' => [
                'create' => Auth::user()->can('title create'),
                'edit' => Auth::user()->can('title edit'),
                'delete' => Auth::user()->can('title delete'),
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
        return Inertia::render('Admin/Title/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Title::create($request->all());

        return redirect()->route('titles.index')
                        ->with('message', __('Title created successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Title  $title
     * @return \Inertia\Response
     */
    public function edit(Title $title)
    {
        return Inertia::render('Admin/Title/Edit', [
            'title' => $title,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Title $title)
    {
        $title->update($request->all());

        return redirect()->route('titles.index')
                        ->with('message', __('Title updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Title $title)
    {
        $title->delete();

        return redirect()->route('titles.index')
                        ->with('message', __('Title deleted successfully.'));
    }
}