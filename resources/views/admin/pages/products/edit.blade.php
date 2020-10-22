@extends('admin.layouts.app')

@section('title', 'Editar Produto')

@section('content')
    <h1>Editar produto {{$id}}</h1>

    <form action="{{route("products.update", $id)}}" method="post">
        {{-- <input type="hidden" name="_method" value="PUT"> Jeito extedido --}}
        @method('PUT') {{--Jeito resumido--}}
        @csrf
        <input type="text" name="name" placeholder="nome ">
        <input type="text" name="description" placeholder="Descrição">
        <input type="submit" value="Enviar">
    </form>
@endsection