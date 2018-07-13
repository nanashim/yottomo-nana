
    {!! Form::open(['route' => ['user.future', $user->id]]) !!}
            {!! Form::submit('Future', ['class' => "btn btn-primary btn-xs"]) !!}
    {!! Form::close() !!}
