@extends('layouts.admin_layout')

@section('title', 'Просмотр пользователей')

@section('content')

<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">Пользователи</h3>
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
                <a href="{{ route('user.create') }}">
                    <button class="appearance-none block w-full text-blue-700
                        hover:bg-blue-500 font-semibold hover:text-white
                        border border-blue-500 rounded py-3 px-4 mb-3 bg-white
                        hover:border-transparent">
                        Добавить пользователя
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
                        Name
                    </th>
                    <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Email
                    </th>
                    <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Role
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
                @foreach($users as $user)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $user->id }}
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $user->name }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $user->email }}
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                @foreach($user->getRoleNames() as $role)
                                {{ $role }}
                                @endforeach
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <a href="{{ route('user.edit', $user->id) }}" class="text-gray-900 whitespace-no-wrap">
                                <i class="fas fa-pen">
                                </i>
                            </a>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                            <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post"
                                  class="float-left">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-center" onclick="return confirm('Подтвердите удаление')">
                                    <i class="fas fa-user-times text-center"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach()
                </tbody>
            </table>
            {{--           Pagination           --}}
            <div class="p-2 font-medium rounded-full">{{ $users->links() }}</div>

        </div>
    </div>
</div>
@endsection
