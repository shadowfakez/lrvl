@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-6 gap-4">
        <div class="col-start-2 col-span-4 p-4 justify-center">
            <div class="flex flex-col w-full">
                @foreach($tasks as $task)
                <div class="">
                    <div class="block rounded w-full mb-10">
                        <div class="bg-white bg-gray-100 rounded px-4 py-4 flex flex-col justify-between leading-normal
                    shadow">
                            <div>
                                <div class="grid grid-cols-6 gap-4 mt-3 md:mt-0 text-green-900 font-bold text-xl mb-2">
                                    <p class="col-start-1 col-end-3">Title: <a href="#">{{ $task['title'] }}</a></p>
                                    <p class="col-end-7 col-span-2">Subject: <a href="#">{{ $task['subject'] }}</a></p>
                                </div>
                            </div>
                            <div>
                                <div class="mt-3 md:mt-0 text-gray-700 font-bold text-2xl mb-2">
                                    Task: {{ $task['task'] }}
                                </div>
                            </div>
                            <div class="flex mt-3 p-2 ">
                                <div>Author:
                                    <p class="font-semibold text-gray-700 text-sm capitalize"> <a href="#">{{ $task['author'] }}</a>
                                    </p>
                                    <p class="text-gray-600 text-xs"> {{$task['created_at'] }} </p>
                                </div>
                            </div>
                            <hr>
                            <div class="flex mt-3 p-2 ">
                                <div>Executors:
                                    <p class="font-semibold text-gray-700 text-sm capitalize"><a href="#"> {{ $task['executors'] }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection




