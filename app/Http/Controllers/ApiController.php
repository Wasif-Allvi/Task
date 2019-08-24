<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class ApiController extends Controller
{
    public function create(Request $request)
    {
    	$tasks = new Task();

    	$tasks->name = $request->input('name');
    	$tasks->price = $request->input('price');

    	$tasks->save();
    	return response()->json($tasks);

    }

    public function update(Request $request, $id)
    {
    	$tasks = Task::find($id);
    	$tasks->name = $request->input('name');
    	$tasks->price = $request->input('price');

    	$tasks->save();
    	return response()->json($tasks);
    }

    public function delete(Request $request, $id)
    {
    	$tasks = Task::find($id);
    	$tasks->delete();
    	return response()->json($tasks);
    }
}
