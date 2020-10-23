@extends('admin.layouts.app')  

@section('title', "Detalhes do produto {$product->name}")

@section('content')

<h1>Produto {{$product->name}}</h1>

<ul>
    <li><strong>Nome:</strong>{{$product->name}}</li>
    <li><strong>Preço:</strong>{{$product->price}}</li>
    <li><strong>Descrição:</strong>{{$product->description}}</li>
</ul>

<a href="{{route('products.index')}}" class='btn btn-primary'><<</a>

@endsection