@extends('layouts.app')

@section('title', 'Create Post')

@section('content')

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-check-circle"></i></button>
                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
            </div>
        @endif

        <div class="overflow-x-auto">
            <div class="rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                   for="title">
                                Title
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border
                            border-red rounded py-3 px-4 mb-3" id="title" type="text" name="title"
                                   placeholder="Название ..." required>
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                   for="subject">
                                Subject
                            </label>
                            <textarea name="subject" class="appearance-none block w-full bg-grey-lighter
                            text-grey-darker border
                            border-red rounded py-3 px-4 mb-3"  id="subject" rows="3" placeholder="Предмет задачи ..." required
                            ></textarea>
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                   for="task">
                                Task
                            </label>
                            <textarea name="task" class="appearance-none block w-full bg-grey-lighter text-grey-darker
                            border
                            border-red rounded py-3 px-4 mb-3" id="task"  rows="7" placeholder="Текст задачи ..."
                                      required
                            ></textarea>
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                   for="executors[]">
                                Executors
                            </label>

                            <select name="executors[]" class="right-0 z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800" id="executors" multiple="multiple" required>
                                @foreach($users as $k => $v)
                                    <option class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors
                                     duration-200 transform dark:text-gray-300 hover:bg-blue-500 hover:text-white dark:hover:text-white" value="{{ $v->name }}">{{ $v->name }}</option>
                                @endforeach
                              </select>
                        </div>
                    </div>

                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <button type="submit" class="appearance-none block w-full text-blue-700
                        hover:bg-blue-500 font-semibold hover:text-white
                        border border-blue-500 rounded py-3 px-4 mb-3 bg-white
                        hover:border-transparent">Create Task</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
