@extends('layouts.dashboard')
@section('title', 'Редагувати сторінку')
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
                                <h3 class="card-title">@yield('title') - {{ $product['title'] }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form enctype="multipart/form-data" action="{{ route('product.update', $product['id']) }}"
                                method="post">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Назва Menu</label>
                                        <input type="text" name="title" value="{{ $product['title'] }}"
                                            class="form-control" placeholder="Введіть назву" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Назва SEO</label>
                                        <input type="text" name="seo_title" value="{{ $product['seo_title'] }}"
                                            class="form-control" placeholder="Введіть назву SEO" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="published">Опубліковано</label>
                                        <select name="published" class="custom-select rounded-0" id="published">
                                            <option value="{{ $product['published'] = '1' }}">Так</option>
                                            <option value="{{ $product['published'] = '0' }}">Ні</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="categories">Category</label>
                                        <select name="categories[]" id="categories"  class="custom-select rounded-0" multiple required>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category['title'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="serial">Серійний номер</label>
                                        <input type="text" name="serial" value="{{ $product['serial'] }}" class="form-control" id="serial"
                                            placeholder="Введіть серійний номер">
                                    </div>
                                    <div class="form-group">
                                        <label>Опис товару</label>
                                        <textarea id="content" name="content" class="form-control" rows="4">{{ $product['content'] }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Характеристики</label>
                                        <textarea id="charact" name="charact" class="form-control" rows="4">{{ $product['charact'] }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Ціна</label>
                                        <input type="text" name="price" value="{{ $product['price'] }}"
                                            class="form-control" id="price" placeholder="Введіть ціну" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Опис сторінки (SEO)</label>
                                        <input type="text" name="description" value="{{ $product['description'] }}"
                                            class="form-control" id="description" placeholder="Введіть опис" required>
                                    </div>
                                    <div class="form-group">
                                        <img class="img-thumbnail" src="{{ $product->img }}" alt="{{ $product->title }}"
                                            title="{{ $product->title }}" width="150" height="auto">
                                    </div>
                                    <div class="form-group">
                                        <label>Зображення</label>
                                        <input name="img" class="form-control" type="file"
                                            value="{{ $product->img }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="images[]">Додаткові зображення:</label>
                                        <input type="file" class="form-control m-2" name="images[]" multiple>
                                    </div>
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" name="slug" class="form-control"
                                            value="{{ $product['slug'] }}" placeholder="url">
                                    </div>

                                </div>

                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Зберегти</button>
                                </div>
                            </form>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12"><h5>Додаткові зображення:</h5></div>
                                    <div class="mt-4"></div>
                                    @if (count($product->images)>0)
                                        @foreach ($product->images as $img)
                                            <div class="card col-md-2">

                                                <form action="/deleteimage/{{ $img->id }}" method="post">
                                                    <button class="btn text-danger">X</button>
                                                    @csrf
                                                    @method('delete')
                                                </form>

                                                <img src="/img/gallery/{{ $img->image }}" class="img-thumbnail" style="height: auto; max-width: 200px;" alt="" srcset="">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
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
