@extends('layouts.admin_layout')

@section('title', 'Edit Post')

@section('content')
    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <h3 class="font-bold pl-2">Edit Post <b>{{ $post->name }}</h3>
            </div>
        </div>

        <div class="overflow-x-auto">
            <div class="rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                <form action="{{ route('posts.update', $post['id']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                   for="title">
                                Title
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border
                            border-red rounded py-3 px-4 mb-3" id="title" type="text" name="title"
                                   value="{{ $post['title'] }}" required>
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                   for="description">
                                Description
                            </label>
                            <textarea name="description" class="appearance-none block w-full bg-grey-lighter text-grey-darker border
                            border-red rounded py-3 px-4 mb-3"  id="description" rows="3" required
                            >{{ $post['description'] }}</textarea>
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                   for="content">
                                Content
                            </label>
                            <textarea name="content" class="appearance-none block w-full bg-grey-lighter text-grey-darker border
                            border-red rounded py-3 px-4 mb-3" id="content"  rows="7"
                                      required
                            >{{ $post['content'] }}</textarea>
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <button type="submit" class="appearance-none block w-full text-blue-700
                        hover:bg-blue-500 font-semibold hover:text-white
                        border border-blue-500 rounded py-3 px-4 mb-3 bg-white
                        hover:border-transparent">Edit Post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
