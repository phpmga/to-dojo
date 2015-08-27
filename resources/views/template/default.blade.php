<!DOCTYPE html>
<html>
<head>
    <title>toDOJO</title>
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<style>
    .container {
        margin-top: 80px;
    }
</style>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('todos') }}">toDOJO</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('todos') }}">Visualizar TODOS</a></li>
        <li><a href="{{ URL::to('todos/create') }}">Criar um TODO</a>
    </ul>
</nav>

<div class="container">
    @yield('content')
</div>

@yield('script')

</body>
</html>