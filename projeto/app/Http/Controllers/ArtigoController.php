<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Http\Resources\ArtigoResource;
use App\Models\Artigo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtigoController extends Controller
{
    public function index()
    {
        $artigos = Artigo::paginate(10);
        return ArtigoResource::collection($artigos);
        // return $this->sendResponseOk(ArtigoResource::collection($artigos), 'Artigos recuperados com sucesso.');
    }

    public function show($id)
    {
        $artigo = Artigo::findOrFail($id);
        return Handler::sendResponseOk($artigo, "Artigo encontrado com sucesso");;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => ['required', 'unique:artigos'],
            'conteudo' => 'required'
        ]);

        if ($validator->fails()) {
            return Handler::sendErrorBadRequest('Requisição mal feita, falta informações', $validator->errors());
        }

        $artigo = new Artigo;
        $artigo->titulo = $request->input('titulo');
        $artigo->conteudo = $request->input('conteudo');

        if ($artigo->save()) {
            // return new ArtigoResource($artigo);
            return Handler::sendResponseCreated(new ArtigoResource($artigo), 'Artigo criado com sucesso.');
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'conteudo' => 'required'
        ]);

        if ($validator->fails()) {
            return Handler::sendErrorBadRequest('Requisição faltando informações.', $validator->errors());
        }

        $artigo = Artigo::findOrFail($request->id);

        $artigo->titulo = $request->input('titulo');
        $artigo->conteudo = $request->input('conteudo');

        if ($artigo->save()) {
            // return new ArtigoResource($artigo);
            return Handler::sendResponseOk(new ArtigoResource($artigo), 'Artigo atualizado com sucesso.');
        }
    }

    public function destroy($id)
    {
        $artigo = Artigo::findOrFail($id);
        if ($artigo->delete()) {
            // return new ArtigoResource($artigo);
            return Handler::sendResponseNoContent('Artigo deletado com sucesso');
        }
    }
}
