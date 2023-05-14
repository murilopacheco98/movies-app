<?php

namespace App\Http\Controllers;

use App\Http\Resources\CrudResource;
use App\Models\Artigo;
use App\Models\crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    public function index()
    {
        $crud = crud::paginate(10);
        return CrudResource::collection($crud);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'unique:cruds'],
            'description' => ['required']
        ]);

        if ($validator->fails()) {
            return response($validator->errors(), 400);
        }

        $crud = new crud($request->all());
        // $crud->name = $request->input('name');
        // $crud->description = $request->input('description');
        if ($crud->save()) {
            return response($crud, 201);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'unique:cruds'],
            'description' => ['required']
        ]);

        if ($validator->fails()) {
            return response($validator->errors(), 400);
        }

        $crud = Crud::findOrFail($id);
        $crud->update($request->all());
        // $crud->name = $request->input('name');
        // $crud->description = $request->input('description');
        if ($crud->save()) {
            return response($crud, 200);
        }
    }

    public function destroy($id)
    {
        $crud = Crud::findOrFail($id);
        if ($crud->delete()) {
            return response(null, 204);
        }
    }
}
