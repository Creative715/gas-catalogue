@extends('layouts.dashboard')
@section('title', 'Додати сторінку')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('mainAdmin') }}">Головна</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-12">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                            </div>
                        @endif
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">@yield('title')</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form enctype="multipart/form-data" action="{{ route('page.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Назва сторінки</label>
                                        <input type="text" name="title" class="form-control" placeholder="Введіть назву" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="intro">Вступний текст</label>
                                        <textarea id="intro" name="intro" class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Текст сторінки</label>
                                        <textarea id="content" name="content" class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Опис сторінки (SEO)</label>
                                        <input type="text" name="description" class="form-control" id="exampleInputName" placeholder="Введіть опис" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Зображення</label>
                                        <input name="img" class="form-control" type="file">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Адреса сторінки</label>
                                        <input type="text" name="slug" class="form-control" placeholder="url" readonly>
                                    </div>

                                </div>

                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Додати</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

