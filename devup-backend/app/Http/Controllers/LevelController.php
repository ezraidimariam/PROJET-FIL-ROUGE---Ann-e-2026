<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        $levels = Level::withCount('users')->get();
        return view('levels.index', compact('levels'));
    }

    public function create()
    {
        return view('levels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'points_requis' => 'required|integer|min:0',
        ]);

        Level::create($request->all());

        return redirect()->route('levels.index')->with('success', 'Level created successfully!');
    }

    public function show(Level $level)
    {
        $level->load('users');
        return view('levels.show', compact('level'));
    }

    public function edit(Level $level)
    {
        return view('levels.edit', compact('level'));
    }

    public function update(Request $request, Level $level)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'points_requis' => 'required|integer|min:0',
        ]);

        $level->update($request->all());

        return redirect()->route('levels.index')->with('success', 'Level updated successfully!');
    }

    public function destroy(Level $level)
    {
        $level->delete();
        return redirect()->route('levels.index')->with('success', 'Level deleted successfully!');
    }
}
