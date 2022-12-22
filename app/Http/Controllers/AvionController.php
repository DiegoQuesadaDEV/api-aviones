<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\ApiController;
use App\Models\Avion;
use Illuminate\Http\Request;

class AvionController extends ApiController
{
    public function index()
    {
        
        try {
            return $this->successResponse(Avion::all()->load('fabricante'), 'Se han obtenido todos los aviones correctamente');
        } catch (\Exception $e) {
            return $this->errorResponse('No se han podido obtener los aviones', 500);
        }
    }

    public function show(Avion $avion)
    {
        try {
            return $this->successResponse($avion->load('fabricante'), 'Se ha obtenido el avion correctamente');
        } catch (\Exception $e) {
            return $this->errorResponse('No se ha podido obtener el avion', 500);
        }
    }

    public function update(Request $request, Avion $avion)
    {
        try {
            $request->validate([
                'modelo' => 'required',
                'capacidad' => 'required',
                'alcance' => 'required',
                'estado' => 'required',
                'fabricante_id' => 'required'
            ]);
            
            $avion->update($request->all());
            return $this->successResponse($avion, 'Se ha actualizado el avion correctamente');
        } catch (\Exception $e) {
            return $this->errorResponse('No se ha podido actualizar el avion', 500);
        }
    }

    public function create(Request $request, Avion $avion)
    {
        try {
            $request->validate([
                'modelo' => 'required',
                'capacidad' => 'required',
                'alcance' => 'required',
                'estado' => 'required',
                'fabricante_id' => 'required'
            ]);

            $avionCreado = $avion->create($request->all());
            return $this->successResponse($avionCreado, 'Se ha creado el avion correctamente');
        } catch (\Exception $e) {
            return $this->errorResponse('No se ha podido crear el avion', 500, $e);
        }
    }

    public function destroy(Avion $avion)
    {
        try {
            $avion->delete();
            return $this->successResponse($avion, 'Se ha eliminado el avion correctamente');
        } catch (\Exception $e) {
            return $this->errorResponse('No se ha podido eliminar el avion', 500);
        }
    }
}
