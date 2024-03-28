<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
    <title>To-Do App</title>
</head>
<body>

<section class="container-fluid bg-white py-5">
    <h1 class="text-primary pb-2 px-1 text-center ">My To Do List <span class="text-dark"><i class="fa-solid fa-list-check"></i></span> </h1>

    <form action="{{route('task.new')}}" class="d-flex px-2 pb-4"  method="POST">
        @csrf
        <input class="form-control form-control-lg me-2 bg-light"  placeholder="Add tasks" name="task">
        <button class="btn btn-success" type="submit">Add</button>

    </form>
    <table class="table mx-2">


    @foreach($tasks as $task)
        <tr class="fs-3">
            <td>{{$task->task}} </td>
            <td>
                <a href="" class="btn btn-danger btn-sm " onclick="event.preventDefault(); document.getElementById('taskDeleteForm{{$task->id}}').submit();" title="Delete" >
                    <i class="fa-regular fa-trash-can"></i>
                </a>
                <form action="{{route('task.delete', ['id' => $task->id])}}" method="POST" id="taskDeleteForm{{$task->id}}">
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</section>



<script src="https://kit.fontawesome.com/dd288c4724.js" crossorigin="anonymous"></script>
<script src="{{asset('/')}}js/bootstrap.bundle.min.js"></script>
</body>
</html>