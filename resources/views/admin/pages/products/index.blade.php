@extends('admin.layouts.app')  

@section('title', 'gestão de produtos')

@section('content')

    <h1>EXIBINDO PRODUTOS</h1>
    @if ($teste === '123')
        É igual
    @elseif ($teste == 123)
        É igual a 123
    @else
        É diferente
    @endif
        
    @unless ($teste === 123)
        true
    @else
        djfjdsafao
    @endunless

    @isset($teste2)
        <p>{{$teste2}}</p>
        
    @endisset

    @empty($teste3)
        osadoijfdsaofodsaofds
    @endempty

    @auth
        <p>Autenticado</p>
    @else
        <p>Não autenticado</p>
    @endauth

    @guest
        <p>Bem vindo visitante</p>
    @else
        Bem vindo de volta
    @endguest

    @switch($teste)
        @case(1)
            igual 1
            @break
        @case(2)
            igual 2
            @break
        @case(3)
            igual 3
            @break
        @case(123)
            igual 123
            @break
        @default
            Default
    @endswitch

@endsection

