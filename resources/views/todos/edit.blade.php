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

    <div class="form-group">
        {!! Form::label('name', 'Tarefa') !!}
        {!! Form::text('name', $todo->name, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Descrição') !!}
        {!! Form::textarea('description', $todo->description, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('completed', 'Status') !!}
        {!! Form::select('completed', array('0' => 'Not Completed', '1' => 'Completed'), $todo->completed, array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Salvar TODO', array('class' => 'btn btn-primary form-control')) !!}

{!! Form::close() !!}
@endsection