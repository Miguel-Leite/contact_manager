<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:50',
                'email' => 'required',
                'contact' => 'required|unique:contacts,contact',
            ], [
                'max' => 'O nome deve ter no maximo 50 caracteres.',
                'required' => 'Campo :attribute é obrigatŕio.',
                'unique' => 'Este contacto já esta registrado no sistema.',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors(),
                ], 201);
            }
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
                $validator = Validator::make($request->all(), [
                    'name' => 'required|max:50',
                    'email' => 'required',
                    'contact' => 'required',
                ], [
                    'name' => [
                    'required' => 'Campo nome é obrigatŕio.',
                    'max' => 'Nome deve ter no minimo 50 caracteres.', ],
                    'email' => [
                        'required' => 'Campo e-mail é obrigatŕio.',
                    ],
                    'contact' => [
                        'required' => 'Campo e-mail é obrigatŕio.',
                    ],
                ]);
                if ($validator->fails()) {
                    return response()->json([
                        'success' => true,
                        'message' => $validator->errors(),
                    ], 201);
                }
                $data = $request->all();
                $contact->update($data);

                return response()->json([
                    'success' => true,
                    'message' => "Contacto de {$contact->name} actualizado com sucesso!",
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
