@extends('layouts.admin_layout')

@section('title', 'Редактировать данные пользователя')

@section('content')
    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

        <div class="bg-gray-800 pt-3">
            <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <h3 class="font-bold pl-2">Редактировать данные  пользователя <b>{{ $user->name }}</b></h3>
            </div>
        </div>

        <div class="rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
            <form action="{{ route('user.update', $user['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="name">
                            Name
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="name" type="text" value="{{ $user['name'] }}" name="name" required>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
                            Email
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="email" type="email" value="{{ $user['email'] }}" name="email">
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="password">
                            Password
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="password" type="password" value="{{ $user['password'] }}" name="password" required>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="role">
                            Role
                        </label>
                        <div class="relative">
                            <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter
                            text-grey-darker py-3 px-4 pr-8 rounded" id="role" name="role" >
                                @foreach($role as $v)
                                <option>{{ $v->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <button type="submit" class="appearance-none block w-full text-blue-700
                        hover:bg-blue-500 font-semibold hover:text-white
                        border border-blue-500 rounded py-3 px-4 mb-3 bg-white
                        hover:border-transparent">Сохранить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    {{--<!-- Content Header (Page header) -->

                                @if(!$user->hasRole('admin'))
                                <div class="form-group">
                                    <label class="btn btn-outline-primary mr-3" for="rolecheck">Назначить администратором</label>
                                    <input type="checkbox" name="role" class="btn-check" id="rolecheck" autocomplete="off">
                                </div>
                                @else
                                    <div class="form-group">
                                        <label class="btn btn-outline-primary mr-3" for="rolecheck">Убрать права администратора</label>
                                        <input type="checkbox" name="role" class="btn-check" id="rolecheck" autocomplete="off">
                                    </div>
                                @endif




                            </div>
                            <!-- /.card-body -->


                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->--}}
@endsection


