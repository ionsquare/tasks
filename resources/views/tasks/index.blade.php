@extends('layouts.default')

@section('content')
    <h2>Tasks</h2>
     @if ( !$tasks->count() )
        You have no tasks
    @else
        <ul>
            @foreach( $tasks as $task )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('tasks.destroy', $task->slug))) !!}
                        <a href="{{ route('tasks.show', $task->slug) }}">{{ $task->name }}</a>
                        (
                            {!! link_to_route('tasks.edit', 'Edit', array($task->slug), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('tasks.create', 'Create Task') !!}
    </p>
@endsection