@extends('layouts.admin_layout')

@section('title', 'Просмотр пользователей')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все пользователи</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">

                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%">
                                №
                            </th>
                            <th style="width: 1%">
                                ID
                            </th>
                            <th>
                                Имя
                            </th>
                            <th>
                                Email
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $user)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $user->id }}
                                </td>
                                <td>
                                    {{ $user->name }}
                                    @if($user->hasRole('admin'))
                                        <span class="badge bg-success"> admin </span>
                                    @endif
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>

                                <td class="project-actions text-right">

                                    <a class="btn btn-info btn-sm" href="{{ route('user.edit', $user->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Изменить данные пользователя
                                    </a>

                                </td>

                            </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
