<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public static $task;

    public static function newTask($request)
    {
        self::$task                 = new Task();
        self::$task->task         = $request->task;
        self::$task->save();

        return self::$task;
    }
    public static function updateTask($request, $id)
    {
        self::$task                 = Task::find($id);
        self::$task->task           = $request->task;
        self::$task->save();
        return self::$task;
    }

    public static function deleteTask($id)
    {
        self::$task = Task::find($id);
        self::$task->delete();
    }
}
