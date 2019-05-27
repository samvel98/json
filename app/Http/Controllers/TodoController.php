<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;


class TodoController extends Controller
{
    public function index() {
        return response()->json(Todo::all());
    }

    public function create(Request $request) {
        $todo = Todo::create($request->all());
        return response()->json($todo);
    }

    public function show($id) {
        return response()->json(Todo::find($id));
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->fill($request->all())->save();
        return response()->json($todo);
    }

    public function destory($id) {
        $todo = Todo::find($id);
        $todo->delete();
        return response()->json(Todo::all());
    }
}
