@extends('layouts.app')

@section('content')

    <div class="body">
        <div class="p-4 rounded">
            <div class="main bg-white border-2 border-gray-300 rounded">
                <div class="rounded border-b-2 border-gray-300 bg-gray-200">
                    <h1 class="p-4">{{ $post->title }}</h1>
                </div>
                <div class="p-4 border-b-2 border-gray-300 bg-gray-100">
                    <p class="mb-4">{{ $post->description }}</p>
                </div>
                <div class="p-4 rounded border-b-2 border-gray-300 bg-gray-100">
                    <p class="mb-4">{{ $post->content }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection