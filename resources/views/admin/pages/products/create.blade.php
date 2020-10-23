@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')
    <h1>Cadastrar novo produto</h1>

    @include('admin.includes.alerts')

    <form action="{{route("products.store")}}" method="post" enctype="multipart/form-data" class="form">
        @include('admin.pages.products._partials.form')
    </form>
@endsection