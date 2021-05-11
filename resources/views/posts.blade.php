@extends('layouts.app')

@section('content')


                <div class="body">
                    @foreach($posts as $post)
                    <div class="p-4 rounded">
                        <div class="main bg-white border-2 border-gray-300 rounded">
                            <div class="rounded border-b-2 border-gray-300 bg-gray-200">
                                <h1 class="p-4">{{ $post->title }}</h1>
                            </div>
                            <div class="p-4 bg-gray-100">
                                <p class="mb-4">{{ $post->description }}</p>
                                <a href="{{ route('show-post', ['post' => $post->id]) }}">
                                    <button class="flex mx-auto mt-6 text-white bg-indigo-500 border-2 py-2 px-5
                                    focus:outline-none
                    hover:bg-indigo-600 rounded-md">Read more...</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{--           Pagination           --}}
                <div class="p-4 rounded">
                <div class="main bg-white border-2 border-gray-300 rounded">
                    <div class="p-4 rounded bg-gray-50">
                        {{ $posts->links() }}
                    </div>
                </div>
                </div>

@endsection