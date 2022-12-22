<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\ApiController;
use App\Models\Fabricante;
use Illuminate\Http\Request;

class FabricanteController extends ApiController
{
    public function index()
    {
        try {
            return $this->successResponse(Fabricante::all(), 'Se han obtenido todos los fabricantes correctamente');
        } catch (\Exception $e) {
            return $this->errorResponse('No se han podido obtener los fabricantes', 500);
        }
    }

    public function show(Fabricante $fabricante)
    {
        try {
            return $this->successResponse($fabricante, 'Se ha obtenido el fabricante correctamente');
        } catch (\Exception $e) {
            return $this->errorResponse('No se ha podido obtener el fabricante', 500);
        }
    }

    public function update(Request $request, Fabricante $fabricante)
    {
        try {
            $request->validate([
                'nombre' => 'required',
                'localización' => 'required',
                'capital' => 'required'
            ]);

            $fabricante->update($request->all());
            return $this->successResponse($fabricante, 'Se ha actualizado el fabricante correctamente'); 
        } catch (\Exception $e) {
            return $this->errorResponse('No se ha podido actualizar el fabricante', 500);
        }
    }

    public function create(Request $request, Fabricante $fabricante)
    {
        try {
            $request->validate([
                'nombre' => 'required',
                'localización' => 'required',
                'capital' => 'required'
            ]);

            $fabricanteCreado = $fabricante->create($request->all());
            return $this->successResponse($fabricanteCreado, 'Se ha creado el fabricante correctamente');
        } catch (\Exception $e) {
            return $this->errorResponse('No se ha podido crear el fabricante', 500);
        }
    }

    public function destroy(Fabricante $fabricante)
    {
        try {
            $fabricante->delete();
            return $this->successResponse($fabricante, 'Se ha eliminado el fabricante correctamente');
        } catch (\Exception $e) {
            return $this->errorResponse('No se ha podido eliminar el fabricante', 500);
        }
    }
}
