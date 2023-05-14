<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        $pessoa = Pessoa::all();
        // return response($pessoa, 200);
        return view('welcome', ['pessoas' => $pessoa]);
    }

    public function create()
    {
        return view('pessoa.create');
    }

    public function store(Request $request)
    {
        $pessoa = new Pessoa($request->all());
        if ($pessoa->save()) {
            return redirect('/')->with('msg', 'Evento criado com sucesso!');
        }
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->update($request->all());
        return response($pessoa, 200);
    }

    public function destroy(string $id)
    {
        $pessoa = Pessoa::findOrFail($id);
        if ($pessoa->delete()) {
            return redirect('/');
        }
    }
}
