<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function index()
    {
        $challenges = Challenge::with('admin')->get();
        return view('challenges.index', compact('challenges'));
    }

    public function create()
    {
        return view('challenges.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'points_recompense' => 'required|integer|min:0',
        ]);

        $challenge = Challenge::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'points_recompense' => $request->points_recompense,
            'admin_id' => auth()->user()->admin->id,
        ]);

        return redirect()->route('challenges.index')->with('success', 'Challenge created successfully!');
    }

    public function show(Challenge $challenge)
    {
        $challenge->load(['questions.answers', 'admin']);
        return view('challenges.show', compact('challenge'));
    }

    public function edit(Challenge $challenge)
    {
        return view('challenges.edit', compact('challenge'));
    }

    public function update(Request $request, Challenge $challenge)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'points_recompense' => 'required|integer|min:0',
        ]);

        $challenge->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'points_recompense' => $request->points_recompense,
        ]);

        return redirect()->route('challenges.index')->with('success', 'Challenge updated successfully!');
    }

    public function destroy(Challenge $challenge)
    {
        $challenge->delete();
        return redirect()->route('challenges.index')->with('success', 'Challenge deleted successfully!');
    }
}
