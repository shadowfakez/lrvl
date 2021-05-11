@extends('layouts.app')

@section('content')
    <section class="flex text-gray-600 body-font w-full">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col -mx-4 -mb-10 text-center">
                <div class="mb-10 px-4">
                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform
                     rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200
                     hover:text-gray-700 border border-gray-400" href="{{ route('posts.index') }}">
                        <span class="mx-4 font-medium">Статьи</span>
                    </a>
                </div>
                <div class="mb-10 px-4">
                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform
                     rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200
                     hover:text-gray-700 border border-gray-400" href="{{ route('tasks.index') }}">
                        <span class="mx-4 font-medium">Задачи</span>
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection