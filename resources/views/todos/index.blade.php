@extends('template.default')

@section('content')
<h1>toDoJo</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <td class="col-md-1 text-center">ID</td>
            <td class="col-md-3">Tarefa</td>
            <td class="col-md-5">Descrição</td>
            <td class="col-md-1 text-center">Status</td>
            <td class="col-md-2 text-center">Ações</td>
        </tr>
    </thead>
    <tbody>
    @foreach($todos as $key => $value)
        <tr>
            <td class="text-center">{{ $value->id }}</td>
            <td><strong>{{ $value->name }}</strong></td>
            <td>{{ $value->description }}</td>
            <td class="text-center">{!! $value->completed ? '<span class="glyphicon glyphicon-ok text-success"></span>' : '<span class="glyphicon glyphicon-time text-danger"></span>' !!}</td>
            <td class="text-center">
                <a class="btn btn-sm btn-danger" href="javascript:confirmDelete({{ $value->id }})"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;
                <a class="btn btn-sm btn-info" href="{{ route('todos.edit', $value->id) }}"><span class="glyphicon glyphicon-edit"></span></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection

@section('script')
<script>
function confirmDelete(id) {
    if (confirm('Deseja apagar a tarefa ' + id + '?')) {
        $.ajax({
            type: "POST",
            url: "todos/" + id,
            data: {
                _method: "DELETE",
                _token: '{{ csrf_token() }}'
            },
            success: function() {
                location.reload();
            }
        });
    }
}
</script>
@endsection