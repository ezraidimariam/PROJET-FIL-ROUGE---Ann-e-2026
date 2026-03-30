@extends('layouts.app')

@section('title', 'Levels')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Levels</h1>
    <a href="{{ route('levels.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create New Level</a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($levels as $level)
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-xl font-bold mb-2">{{ $level->titre }}</h3>
            <p class="text-gray-600 mb-4">{{ $level->points_requis }} points required</p>
            <p class="text-sm text-gray-500 mb-4">{{ $level->users_count }} users at this level</p>
            <div class="flex space-x-2">
                <a href="{{ route('levels.show', $level) }}" class="text-blue-600 hover:underline">View</a>
                <a href="{{ route('levels.edit', $level) }}" class="text-yellow-600 hover:underline">Edit</a>
                <form action="{{ route('levels.destroy', $level) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    @empty
        <div class="col-span-full text-center text-gray-500">No levels found.</div>
    @endforelse
</div>
@endsection
