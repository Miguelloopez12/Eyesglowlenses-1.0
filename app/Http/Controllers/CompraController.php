<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Producto;
use App\Models\productos;
use App\Models\Facturacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class CompraController extends Controller
{
    public function procesarCompra(request $request)
{

    $validator = Validator::make($request->all(), [
        'nombre' => ['required'],
        'apellido' => ['required'],
        'correo' => ['required'],
        'ciudad' => ['required'],
        'direccion' => ['required'],
        'telefono' => ['required'],
    ]);

    // Manejar errores de validación
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    try {
        // Validar los datos del formulario

        // Crear una nueva compra en la base de datos
        $compra = new Compra;
        $compra->id = auth()->id(); // Asignar el ID del usuario autenticado a la compra
        $compra->monto_total = $request->input('total'); // Asignar el monto total de la compra
        $compra->save();

        // Crear una nueva instancia de Facturacion y asignarle los datos del formulario
        $facturacion = new Facturacion;
        $facturacion->nombre = $request->input('nombre');
        $facturacion->apellido = $request->input('apellido');
        $facturacion->email = $request->input('correo');
        $facturacion->cedula = $request->input('cedula');
        $facturacion->ciudad = $request->input('ciudad');
        $facturacion->direccion = $request->input('direccion');
        $facturacion->telefono = $request->input('telefono');
        $facturacion->id_compra = $compra->id; // Asignar el ID de la compra a la facturación
        $facturacion->save(); // Guardar los datos de facturación en la base de datos

        // Obtener los datos del carrito del formulario y decodificarlos
        $carrito = json_decode($request->input("carrito"), true);

        // Asociar los productos comprados a la compra
        foreach($carrito as $productoData){
            $producto = Productos::find($productoData["id_producto"]); // Buscar el producto en la base de datos
            if($producto) {
                // Asociar el producto con la compra
                $compra->productos()->attach($producto->id_producto, [
                    "cantidad" => $productoData["cantidad"], // Asignar la cantidad comprada del producto
                    "nombre" => $producto->nombre // Asignar el nombre del producto
                ]);
            }
        }

        // Retornar una respuesta exitosa
        return response()->json(["mensaje"=> "Compra procesada con exito"], 200);

    } catch(\Exception $e){
        // Capturar y manejar errores
        Log::error("Error al procesar la compra: " . $e->getMessage() . " en " . $e->getFile() . " en la línea " . $e->getLine());
        // Retornar una respuesta de error
        return response()->json(["error"=>"Error al procesar la compra: " . $e->getMessage() . " en " . $e->getFile() . " en la línea " . $e->getLine()], 500);
    }
}


  public function MostrarResumen()
  {
    $resumencompra = Compra::all();
    $resumenproductos = Facturacion::all();
    return view("orden", ["resumencompra" => $resumencompra, "resumenproductos => $resumenproductos" ]);
  }


}
