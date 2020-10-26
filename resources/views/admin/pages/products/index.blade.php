@extends('admin.layouts.app')  

@section('title', 'gestão de produtos')

@section('content')

    <h1>EXIBINDO PRODUTOS</h1>

    <a href="{{route("products.create")}}" class='btn btn-primary'>Cadastrar</a>

    <hr>

    <form action="{{ route("products.search") }}" method="post" class="form form-inline">
        @csrf
        <input type="text" name="filter" placeholder="filtrar: " class="form-control" value="{{$filters['filter']?? ''}}" style="margin: 5px">
        <hr>
        <button type="submit" class="btn btn-info">Pesquisar</button>
    </form>

    <hr>

    <table border="1" class="table table-striped">
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Preço</th>
                <th width='100'>Ações</th>
            </tr>
        </thead>
        <tbody>product
            @foreach ($products as $product)
                <tr>
                    <td>
                        @if ($product->image)
                            <img src="{{ url("storage/{$product->image}") }}" alt=" {{$product->image}} " style="max-width: 100px;">
                        @endif
                    </td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}"><input type="button" class='btn btn-primary' value="Editar" style="margin: 5px"></a>
                        <a href="{{ route('products.show', $product->id) }}"><input type="button" class='btn btn-primary' value="Detalhes"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
    @if (isset($filters))
    {!! $products->appends($filters)->links() !!}
    @else
    {!! $products->links() !!}
    @endif
    

@endsection


