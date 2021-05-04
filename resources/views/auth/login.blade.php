@extends('layouts.app')

@section('content')
    <section class="flex text-gray-600 body-font w-full">
        <div class="container px-5 py-24 mx-auto">
            <div class=" flex-col -mx-4 -mb-10 text-center">
                <div class="flex justify-center mb-10 px-4">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-check-circle"></i></button>
                            <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <section class="flex text-gray-600 body-font">
                            <div class="container px-5 py-10 mx-auto flex flex-wrap items-center">
                                <div class="bg-gray-100 rounded-lg p-8 flex flex-col w-full">
                                    <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Login</h2>

                                    <div class="relative mb-4">
                                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                        <input type="email" id="email" name="email" class="w-full bg-white rounded border
                            border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base
                            outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                    <div class="relative mb-4">
                                        <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
                                        <input type="password" id="password" name="password" class="w-full bg-white rounded border
                            border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base
                            outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out
@error('password') is-invalid @enderror" required autocomplete="current-password">
                                    </div>
                                    <div class="relative mb-4 mx-auto items-center">
                                        <label class="inline-flex items-center mt-3">
                                            <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" name="remember"
                                                   id="remember"
                                                    {{ old('remember') ? 'checked' : '' }}><label for="remember"
                                                                                                  class="ml-2 text-gray-700">{{ __('Remember me') }}</label>
                                        </label>
                                    </div>
                                    <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600
                         rounded text-lg">Login</button>

                                    @if (Route::has('password.request'))
                                        <div class="relative mt-8 mx-auto items-center">
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </section>

        {{--@if (session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-check-circle"></i></button>
                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <section class="flex text-gray-600 body-font w-full">
                <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
                    <div class="bg-gray-100 rounded-lg p-8 flex flex-col w-full">
                        <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Login</h2>

                        <div class="relative mb-4">
                            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                            <input type="email" id="email" name="email" class="w-full bg-white rounded border
                            border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base
                            outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        <div class="relative mb-4">
                            <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
                            <input type="password" id="password" name="password" class="w-full bg-white rounded border
                            border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base
                            outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out
@error('password') is-invalid @enderror" required autocomplete="current-password">
                        </div>
                        <div class="relative mb-4 mx-auto items-center">
                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" name="remember"
                                       id="remember"
                                        {{ old('remember') ? 'checked' : '' }}><label for="remember"
                                        class="ml-2 text-gray-700">{{ __('Remember me') }}</label>
                            </label>
                        </div>
                        <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600
                         rounded text-lg">Login</button>

                        @if (Route::has('password.request'))
                            <div class="relative mt-8 mx-auto items-center">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        </form>--}}



{{--
@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror


                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
