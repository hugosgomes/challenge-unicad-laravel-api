<?php

namespace App\Http\Controllers;

use App\Models\Entrega;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EntregaController extends Controller
{

    public function index()
    {
        try {
            $entregas = Entrega::all();
            return $entregas;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $entrega = Entrega::create($data);
            return $entrega;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $entrega = Entrega::find($id);
        $entrega = $entrega->update($data);
        return response()->json([
            'success' => $entrega
        ]);
    }

    public function delete(Request $request, $id)
    {
        $entrega = Entrega::find($id);
        $entrega = $entrega->delete();
        return response()->json([
            'success' => $entrega
        ]);
    }
}
