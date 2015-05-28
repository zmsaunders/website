{!! Form::open() !!}

    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title') !!}

    {!! Form::label('content', 'Content') !!}
    {!! Form::textarea('content') !!}

    {!! Form::button('submit', ['type' => 'submit']) !!}

{!! Form::close() !!}
