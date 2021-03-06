@extends('admin.layouts.app')

@section('title', "Editar Produto {$product->name}")

@section('content')
    <h1>Editar produto {{$product->name}}</h1>

    <form action="{{route("products.update", $product->id)}}" method="post" enctype="multipart/form-data">
        {{-- <input type="hidden" name="_method" value="PUT"> Jeito extedido --}}
        @method('PUT') {{--Jeito resumido--}}
        @include('admin.pages.products._partials.form')
    </form>
@endsection