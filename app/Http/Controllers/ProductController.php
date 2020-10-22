<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $request, $user;

    public function __construct(Request $request)
    {
        //dd($request->prm1);
        $this->request = $request;
        //$this->middleware('auth');
        /*
        $this->middleware('auth')->only([
            'create', 'store'
        ]);*/
        // $this->middleware('auth')->except([
        //     'index', 'show'
        // ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = Product::paginate();

        return view('admin.pages.products.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductRequest $request)
    {
        // validação simples
        // $request-> validate([
        //         'name' => 'required|min:3|max:255',
        //         'description' => 'nullable|min:3|max:10000',
        //         'photo' => 'required|image'
        //     ]);

            dd('ok');

        // dd($request-> name); pega um valor especifico
        // dd($request->only(['name','description'])); pega apenas dados especificados
        // dd($request->all()); pega todos os dados
        // dd($request-> has('name')); retorna true se existir o valor, se não, retorna false
        // dd($request-> input('', 'campo nao informado/inexistente')); se o campo não existir ele retorna o valor default apos a virgula
        // dd($request-> except('_token', 'name')); pega todos os dados com execção dos especificados
        if ($request-> file('photo')-> isValid()) {
            //dd($request->file('photo')-> store('products'));
            $nameFile = $request -> name . '.' . $request->photo->extension();
            dd($request->file('photo')-> storeAs('products', $nameFile));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd("Editando produto {$id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
