@extends('layouts.admin_layout')

@section('title', 'Редактировать данные пользователя')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать данные пользователя</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-check-circle"></i></button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('user.update', $user['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Имя</label>
                                    <input type="text" value="{{ $user['name'] }}" name="name" class="form-control" placeholder="Введите имя пользователя" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" value="{{ $user['email'] }}" name="email" class="form-control" placeholder="Введите адрес электронной почты" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Пароль</label>
                                    <input type="password" value="{{ $user['password'] }}" name="password" class="form-control" placeholder="Введите пароль"required>
                                </div>

                                <div class="form-group">
                                    <label class="btn btn-outline-primary mr-3" for="rolecheck">Сделать Админом</label>
                                    <input type="checkbox" name="role" class="btn-check" id="rolecheck" autocomplete="off">
                                </div>


                                {{--<div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Выберите роль для пользователя
                                    </button>

                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" name="" href="">Администратор</a>
                                            <a class="dropdown-item" href="#">Пользователь</a>
                                        </div>

                                </div>--}}

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Редактировать</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection


<?php print_r($_POST); ?>
