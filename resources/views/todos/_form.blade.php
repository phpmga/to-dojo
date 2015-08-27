<div class="form-group">
    {!! Form::label('name', 'Tarefa') !!}
    {!! Form::text('name', isset($todo) ? $todo->name : null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Descrição') !!}
    {!! Form::textarea('description', isset($todo) ? $todo->description : null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('completed', 'Status') !!}
    {!! Form::select('completed', array('0' => 'Not Completed', '1' => 'Completed'), isset($todo) ? $todo->completed : null, array('class' => 'form-control')) !!}
</div>
