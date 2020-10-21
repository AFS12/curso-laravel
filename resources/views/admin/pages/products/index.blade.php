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
    subarashii
@else
    djfjdsafao
@endunless

@isset($teste2)
    <p>{{$teste2}}</p>
    
@endisset

@empty($teste3)
    osadoijfdsaofodsaofds
@endempty

@endsection

