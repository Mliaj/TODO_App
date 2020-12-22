<?php

namespace App\Http\Controllers;

use App\TodoList;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todoList = TodoList::all();
        return view('home', compact('todoList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = new TodoList();
        $todo->title   = $request->title;
        $todo->content = $request->content;
        $todo->due     = Carbon::parse($request->date . ' ' . $request->time);
        $todo->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $todo = TodoList::findOrFail($id);
        return view('components.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todo = TodoList::findOrFail($id);

        $todo->title   = $request->title;
        $todo->content = $request->content;
        $todo->isActive = $request->isActive;
        $todo->due     = Carbon::parse($request->date . ' ' . $request->time);
        $todo->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $toBeDeletedID)
    {
        TodoList::findOrFail($toBeDeletedID->id)->delete();
        return redirect()->route($toBeDeletedID->routeName);
    }

    public function getActiveTodos()
    {
        $todoList = TodoList::all()->where('isActive', true);

        return view('home', compact('todoList'));
    }

    public function getCompletedTodos()
    {
        $todoList = TodoList::all()->where('isActive', false);

        return view('home', compact('todoList'));
    }
}
