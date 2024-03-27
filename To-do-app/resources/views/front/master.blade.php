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
<body class="bg-dark">

<section class="container-fluid bg-white py-5">
    <h1 class="text-primary pb-2 px-1 text-center ">My To Do List <span class="text-dark"><i class="fa-solid fa-list-check"></i></span> </h1>

    <form class="d-flex px-2" role="search">
        @csrf
        <input class="form-control form-control-lg me-2 bg-light" type="search" placeholder="Add tasks" aria-label="Search">
        <button class="btn btn-primary" type="submit">Add</button>

    </form>
</section>


<script src="https://kit.fontawesome.com/dd288c4724.js" crossorigin="anonymous"></script>
<script src="{{asset('/')}}js/bootstrap.bundle.min.js"></script>
</body>
</html>