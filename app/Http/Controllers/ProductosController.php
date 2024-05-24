<?php

namespace App\Http\Controllers;

use App\Models\productos;
use App\Models\categoria;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*
        $Productoss = productos::all();

        return view("sinbordes", ["Productoss" => $Productoss]);

        */

        $categoriaid = 1;

        $Productoss = productos::where("id_categoria", $categoriaid)->get();
        return view("sinbordes", ["Productoss" => $Productoss]);
    }


    public function index1()
    {
        $categoriaid = 2;
        $Productoss = productos::where("id_categoria", $categoriaid)->get();
        return view("conbordes", ["Productoss" => $Productoss]);
    }


    public function mostrarDescripcion($id_productos)
    {
        $Productoss = productos::find($id_productos);

        return view("descripcion",["Productoss"=> $Productoss]);
    }

    public function mostrarProducto($id_productos)
    {
        $Productoss = productos::find($id_productos);

        return view("compra",["Productoss"=> $Productoss]);
    }

    public function mostrarCompra()
{
    return view("compra");
}



    



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(productos $productos)
    {
        //
    }
}
