@extends('layouts.app')

@section('title', 'Edit Challenge')

@section('content')
<h1 class="text-3xl font-bold mb-6">Edit Challenge</h1>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('challenges.update', $challenge) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label for="titre" class="block text-gray-700 font-bold mb-2">Title</label>
            <input type="text" name="titre" id="titre" value="{{ $challenge->titre }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
            @error('titre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea name="description" id="description" rows="4" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>{{ $challenge->description }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="points_recompense" class="block text-gray-700 font-bold mb-2">Reward Points</label>
            <input type="number" name="points_recompense" id="points_recompense" value="{{ $challenge->points_recompense }}" min="0" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
            @error('points_recompense')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex space-x-4">
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">Update Challenge</button>
            <a href="{{ route('challenges.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">Cancel</a>
        </div>
    </form>
</div>
@endsection
