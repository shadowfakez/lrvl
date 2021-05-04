@extends('layouts.admin_layout')

@section('title', 'View Posts')

@section('content')

    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <h3 class="font-bold pl-2">Posts</h3>
            </div>
        </div>

        @if (session('success'))
            <div class="py-3 px-5 m-4 bg-blue-100 text-blue-900 text-sm rounded-md border border-blue-200 flex items-center justify-between" role="alert">
                <span>{{ session('success') }}</span>
                <button class="w-4" type="button" data-dismiss="alert" aria-label="Close" onclick="this.parentElement.remove();">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        @endif

        <div class="">
            <div class="inline-block min-w-full shadow">
                <div class="px-5 py-3 border-b-1 border-gray-200 bg-gray-100 text-left text-md font-semibold
            text-gray-600 uppercase tracking-wider">
                    <a href="{{ route('posts.create') }}">
                        <button class="appearance-none block w-full text-blue-700
                        hover:bg-blue-500 font-semibold hover:text-white
                        border border-blue-500 rounded py-3 px-4 mb-3 bg-white
                        hover:border-transparent">
                            Create Post
                        </button>
                    </a>
                </div>
            </div>

            <div class="inline-block min-w-full shadow rounded-lg ">
                <table class="min-w-full leading-normal">
                    <thead>
                    <tr>
                        <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            ID
                        </th>
                        <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Title
                        </th>
                        <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Description
                        </th>
                        <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Content
                        </th>
                        <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Edit
                        </th>
                        <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Delete
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $post->id }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">{{ $post->title }}</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $post->description }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $post->content }}
                                </p>
                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="text-gray-900
                                whitespace-no-wrap">
                                    <i class="fas fa-pen">
                                    </i>
                                </a>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post" class="float-left">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-center" onclick="return confirm('Подтвердите удаление')">
                                        <i class="fas fa-trash-alt text-center"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach()
                    </tbody>
                </table>
                {{--           Pagination           --}}
                <div class="p-2 font-medium rounded-full">{{ $posts->links() }}</div>

            </div>
        </div>
    </div>
@endsection
