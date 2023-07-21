<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            @if(isset($todoList))
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ToDo Name</th>
                            <th>Completed</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($todoList as $todo)
                            <tr>
                                <td>{{ $todo->name }}</td>
                                <td>{{ $todo->complete? 'Completed' : 'Pending' }}</td>
                                <td>
                                    {!! Form::open(['route' => ['todo.update', $todo->id], 'class' => 'form-inline', 'method' => 'put']) !!}
                                    @if($todo->complete)
                                        {!! Form::submit('Incomplete', ['class' => 'btn btn-info btn-xs']) !!}
                                    @else
                                        {!! Form::submit('Complete', ['class' => 'btn btn-success btn-xs']) !!}
                                    @endif
                                    {!! Form::close() !!}

                                    {!! Form::open(['route' => ['todo.destroy', $todo->id], 'class' => 'form-inline', 'method' => 'delete']) !!}
                                    {!! Form::hidden('id', $todo->id) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    {!! $todoList->render() !!}
                </div>
            @else
                <div class="text-center">
                    <h3>No todos available yet</h3>
                    <p> <a style="color:black" href="{{route('create')}}">
                            Create new todo
                        </a></p>
                </div>
            @endif
        </div>
    </body>
</html>
