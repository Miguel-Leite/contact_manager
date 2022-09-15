<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $instance;

    public function __construct()
    {
        $this->instance = new Contact();
    }

    public function store(Request $request)
    {
        try {
            $this->instance->create($request->all());

            return response()->json([
            'success' => true,
            'message' => 'Contacto adicionado com sucesso!',
        ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Não foi possível adicionar usuário!',
            ], $e->getCode());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            if ($contact = $this->instance->find($id)) {
                $contact->update($request->all());

                return response()->json([
                    'success' => true,
                    'message' => 'Contacto actualizado com sucesso!',
                ], 200);
            }

            return response()->json([
                'success' => false,
                'message' => 'Contacto não encontrado!',
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Não foi possível adicionar usuário!',
            ], $e->getCode());
        }
    }

    public function destroy($id)
    {
        try {
            if ($contact = $this->instance->find($id)) {
                $contact->delete();

                return response()->json([
                    'success' => true,
                    'message' => 'Contacto removido com sucesso!',
                ], 200);
            }

            return response()->json([
                'success' => false,
                'message' => 'Contacto não encontrado!',
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Não foi possível remover usuário!',
            ], $e->getCode());
        }
    }
}
