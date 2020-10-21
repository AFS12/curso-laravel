<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ['product 01','product 02','product 03'];
        return $products;
    }

    public function show($id)
    {
        return "Exibindo o produto de id {$id}";
    }

    public function create()
    {
        return "Exibindo form de cadastro de produto";
    }

    public function edit($id)
    {
        return "Editando form do produto de id {$id}";
    }

    public function store()
    {
        return "Cadastrando um novo produto";
    }

    public function update($id)
    {
        return "Editando o produto {$id}";
    }

    public function destroy($id)
    {
        return "Deletando o produto {$id}";
    }

}
