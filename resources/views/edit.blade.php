{{-- コントローラから渡された$user変数を使用 --}}
{!! Form::model($user, ['url' => 'update/' . $user->id]) !!}

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
