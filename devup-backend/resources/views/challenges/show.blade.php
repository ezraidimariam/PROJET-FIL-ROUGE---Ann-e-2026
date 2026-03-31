@extends('layouts.app')

@section('title', $challenge->titre)

@section('content')
<div class="bg-white rounded-lg shadow p-6">
    <div class="flex justify-between items-start mb-6">
        <h1 class="text-3xl font-bold">{{ $challenge->titre }}</h1>
        <div class="flex space-x-2">
            <a href="{{ route('challenges.edit', $challenge) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</a>
            <form action="{{ route('challenges.destroy', $challenge) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600" onclick="return confirm('Are you sure you want to delete this challenge?')">Delete</button>
            </form>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">Challenge Details</h3>
            <div class="bg-gray-50 p-4 rounded">
                <p class="mb-2"><strong>Reward Points:</strong> {{ $challenge->points_recompense }} pts</p>
                <p class="mb-2"><strong>Created by:</strong> {{ $challenge->admin?->user?->name ?? 'Unknown' }}</p>
                <p class="mb-2"><strong>Created at:</strong> {{ $challenge->created_at->format('M d, Y H:i') }}</p>
                @if($challenge->updated_at != $challenge->created_at)
                    <p class="mb-2"><strong>Last updated:</strong> {{ $challenge->updated_at->format('M d, Y H:i') }}</p>
                @endif
            </div>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">Description</h3>
            <div class="bg-gray-50 p-4 rounded">
                <p class="text-gray-700">{{ $challenge->description }}</p>
            </div>
        </div>
    </div>

    @if($challenge->questions->count() > 0)
    <div class="border-t pt-6">
        <h3 class="text-xl font-semibold mb-4">Questions ({{ $challenge->questions->count() }})</h3>
        <div class="space-y-4">
            @foreach($challenge->questions as $question)
            <div class="bg-gray-50 p-4 rounded border-l-4 border-blue-500">
                <h4 class="font-semibold mb-2">{{ $loop->iteration }}. {{ $question->question_text }}</h4>
                @if($question->answers->count() > 0)
                    <div class="ml-4 space-y-1">
                        @foreach($question->answers as $answer)
                            <p class="text-sm {{ $answer->is_correct ? 'text-green-600 font-semibold' : 'text-gray-600' }}">
                                {{ $answer->is_correct ? '✓' : '○' }} {{ $answer->answer_text }}
                            </p>
                        @endforeach
                    </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
    @else
    <div class="border-t pt-6">
        <p class="text-gray-500">No questions added to this challenge yet.</p>
    </div>
    @endif

    <div class="mt-6 flex space-x-4">
        <a href="{{ route('challenges.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">Back to Challenges</a>
    </div>
</div>
@endsection
