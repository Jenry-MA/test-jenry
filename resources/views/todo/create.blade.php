
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body class="antialiased">
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    {!! Form::open(['url' => '/todo', 'class' => 'form-horizontal', 'role' => 'form']) !!}
    <!-- Name Field -->
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('name', 'Todo Name', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('name', null, ['class' => 'text-white']) !!}
            <span class="help-block text-danger">
                    {{ $errors -> first('name') }}
                </span>
        </div>
    </div>
    <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
        {!! Form::label('user_id', 'Todo userID', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('user_id', null, ['class' => 'text-white']) !!}
            <span class="help-block text-danger">
                    {{ $errors -> first('user_id') }}
                </span>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            {!! Form::submit('Create Button', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}


</div>
</body>
</html>

