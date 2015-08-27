@extends('template.default')

@section('content')
<h1>Editar TODO</h1>

@if ($errors->any())
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Erro!</strong>
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::open(['route' => ['todos.update', $todo->id],  'method' => 'PUT']) !!}

    @include('todos._form')

    {!! Form::submit('Alterar TODO', array('class' => 'btn btn-primary form-control')) !!}

{!! Form::close() !!}
@endsection