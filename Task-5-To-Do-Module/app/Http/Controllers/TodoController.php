<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public  function index()
    {
        return view('front.to-do-list',['tasks' => Task::orderBy('id')->get()]);
    }
    public function  create(Request $request)
    {
        Task::newTask($request);
        return redirect()->back();
    }
    public function delete( $id)
    {
        Task::deleteTask($id);

        return redirect()->back();
    }

}
