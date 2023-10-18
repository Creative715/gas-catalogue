@extends('layouts.app', ['title' => 'Категорії товарів', 'description' => 'Категорії продукції, газові котли, теплові насоси, аксесуари до газових котлів і теплових насосів'])
@section('content')
<div class="page">
    <section class="section novi-background breadcrumbs-custom bg-image context-dark"
        style="background-image: url({{ asset('images/bg.jpg') }}">
        <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
                <div class="breadcrumbs-custom-main">
                    <h6 class="breadcrumbs-custom-subtitle title-decorated">Immertrade</h6>
                    <h2 class="text-uppercase breadcrumbs-custom-title">Категорії товарів</h2>
                </div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('main') }}">Головна</a></li>
                    <li><a href="{{ route('categories') }}">Всі категорії</a></li>
                    <li><span>Категорії товарів</span></li>
                </ul>
            </div>
        </div>
    </section>
    Категорії товарів
@endsection
