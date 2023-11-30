<!DOCTYPE html>
<html>
<head>
    <title>users - dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['url' => 'create']) !!}

    <div>
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name') !!}
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>

    <div>
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email') !!}
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>

    <div>
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password') !!}
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>

    <div>
        {!! Form::submit('Submit') !!}
    </div>

    {!! Form::close() !!}
<form >
</form>
</body>
</html>

