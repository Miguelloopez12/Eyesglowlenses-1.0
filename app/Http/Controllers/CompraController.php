<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Producto;
use App\Models\productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CompraController extends Controller
{
    public function procesarCompra(request $request)
    {
        try  {

        Log::info('Datos de la solicitud:', $request->all());
            //Log::info("total:", ['total' => $request->input('total')]);


        // Crear una nueva compra en la base de datos
        $compra = new Compra;
            $compra->id = auth()->id();
            $compra->monto_total = $request->input('total');
            $compra->save();

            $compra->nombre = $request->input('nombre');
            $compra->apellido =$request->input('apellido');



        // Obtener los datos del carrito del formulario y decodificarlos
        $carrito = json_decode($request->input("carrito"), true);

        // Asociar los productos comprados a la compra
        foreach($carrito as $productoData){
            $producto = productos::find($productoData["id_producto"]);
            if($producto) {

                // // Asociar el producto con la compra
                $compra->productos()->attach($producto->id_producto, [
                    "cantidad" => $productoData["cantidad"],
                    "nombre" => $producto->nombre
                ]);
            }
        }
        // Retornar una respuesta
        return response()->json(["mensaje"=> "Compra procesada con exito"], 200);

        } catch(\Exception $e){
            Log::error("Error al procesar la compra: " . $e->getMessage() . " en " . $e->getFile() . " en la línea " . $e->getLine());
            return response()->json(["error"=>"Error al procesar la compra" . $e->getMessage(). " en " . $e->getFile() . " en la linea ". $e->getLine(), 500 ], 500);

    }
}

}
