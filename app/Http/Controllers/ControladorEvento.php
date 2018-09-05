<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
class ControladorEvento extends Controller {

    /**
     * Método para listar evento, retorna un array si es que la tabla de la base de datos noesta vacía
     * @return array
     */
    public function listarEvento() {
        $lista = Evento::orderBy('fecha', 'desc')->get();
       /* $data = array();
        foreach ($lista as $item) {
            $data[] = ["desc" => $item->descripcion,
                "fecha" => $item->created_at->format('Y-m-d'),
                "ruta" =>$item->ruta];//
        }*/
        return response()->json($lista, 200);
      
    }
    
   
}
