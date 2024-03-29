@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
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
@endsection
