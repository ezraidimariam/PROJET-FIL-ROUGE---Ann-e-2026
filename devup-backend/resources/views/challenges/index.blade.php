@extends('layouts.app')

@section('title', 'Challenges')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Challenges</h1>
    <a href="{{ route('challenges.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create New Challenge</a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-3 text-left">Title</th>
                <th class="p-3 text-left">Points</th>
                <th class="p-3 text-left">Created by</th>
                <th class="p-3 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($challenges as $challenge)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">
                        <a href="{{ route('challenges.show', $challenge) }}" class="text-blue-600 hover:underline">
                            {{ $challenge->titre }}
                        </a>
                    </td>
                    <td class="p-3">{{ $challenge->points_recompense }} pts</td>
                    <td class="p-3">{{ $challenge->admin?->user?->name ?? 'Unknown' }}</td>
                    <td class="p-3">
                        <a href="{{ route('challenges.edit', $challenge) }}" class="text-yellow-600 hover:underline mr-2">Edit</a>
                        <form action="{{ route('challenges.destroy', $challenge) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="p-3 text-center text-gray-500">No challenges found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
