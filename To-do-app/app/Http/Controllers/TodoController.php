<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public  function index()
    {
        return view('front.master');
    }
    public function  create(Request $request)
    {
        Task::newTask($request);
        return view('front.master',['tasks' => Task::orderBy('id')->get()]);
    }

}
