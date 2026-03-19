<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::paginate(10);
        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'track_title' => 'required',
            'artist_name' => 'required',
            'genre' => 'required',
            'duration' => 'required',
            'release_date' => 'required|date',
        ]);

        Song::create($request->all());

        return redirect()->route('songs.index')->with('success', 'Song created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $songs = Song::findOrFail($id);
        return view('songs.show', compact('songs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $songs = Song::findOrFail($id);
        return view('songs.edit', compact('songs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'track_title' => 'required',
            'artist_name' => 'required',
            'genre' => 'required',
            'duration' => 'required',
            'release_date' => 'required|date',
        ]);

        $songs = Song::findOrFail($id);
        $songs->update($request->all());

        return redirect()->route('songs.index')->with('success', 'Song updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $songs = Song::findOrFail($id);
        $songs->delete();

        return redirect()->route('songs.index')->with('success', 'Song deleted successfully.');
    }
}
