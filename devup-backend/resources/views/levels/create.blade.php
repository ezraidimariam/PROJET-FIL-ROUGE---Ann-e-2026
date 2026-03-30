@extends('layouts.app')

@section('title', 'Create Level')

@section('content')
<h1 class="text-3xl font-bold mb-6">Create New Level</h1>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('levels.store') }}" method="POST">
        @csrf
        
        <div class="mb-4">
            <label for="titre" class="block text-gray-700 font-bold mb-2">Level Title</label>
            <input type="text" name="titre" id="titre" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
            @error('titre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="points_requis" class="block text-gray-700 font-bold mb-2">Required Points</label>
            <input type="number" name="points_requis" id="points_requis" min="0" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
            @error('points_requis')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex space-x-4">
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">Create Level</button>
            <a href="{{ route('levels.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">Cancel</a>
        </div>
    </form>
</div>
@endsection
