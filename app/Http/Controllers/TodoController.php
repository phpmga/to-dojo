<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all the nerds
        $todos = Todo::all();

        // load the view and pass the nerds
        return view('todos.index')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(TodoRequest $request)
    {
        Todo::create($request->all());

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $todos = Todo::orderBy('created_at', 'DESC')->paginate(5)->toArray();
        $remaining = Todo::where('completed', 0)->count();

        return ['todos' => $todos, 'remaining' => $remaining];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $todo = Todo::find($id);

        return view('todos.edit')->with('todo', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(TodoRequest $request, $id)
    {
        Todo::where('id', $id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'completed' => $request->input('completed')
        ]);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Todo::destroy($id);

        return redirect()->route('index');
    }
}
