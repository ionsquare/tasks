@extends('layouts.default')

@section('content')
    <h2>Create Task</h2>

        {!! Form::model(new App\Project, ['route' => ['tasks.store']]) !!}
            @include('tasks/partials/_form', ['submit_text' => 'Create Task'])
        {!! Form::close() !!}
@endsection

