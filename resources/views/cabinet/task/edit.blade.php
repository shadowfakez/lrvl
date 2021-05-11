@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
          <div class="overflow-x-auto">
            <div class="rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                <form action="{{ route('tasks.update', $task['id']) }}" method="POST">
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
                                   value="{{ $task['title'] }}" required>
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                   for="description">
                                Description
                            </label>
                            <textarea name="subject" class="appearance-none block w-full bg-grey-lighter
                            text-grey-darker border
                            border-red rounded py-3 px-4 mb-3"  id="subject" rows="3" required
                            >{{ $task['subject'] }}</textarea>
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                   for="content">
                                Content
                            </label>
                            <textarea name="task" class="appearance-none block w-full bg-grey-lighter text-grey-darker border
                            border-red rounded py-3 px-4 mb-3" id="task"  rows="7"
                                      required
                            >{{ $task['task'] }}</textarea>
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <button type="submit" class="appearance-none block w-full text-blue-700
                        hover:bg-blue-500 font-semibold hover:text-white
                        border border-blue-500 rounded py-3 px-4 mb-3 bg-white
                        hover:border-transparent">Edit Task</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
