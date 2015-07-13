@extends('layouts.default')

@section('content')
    <p>This is my /resources/views/tasks/show.blade.php file</p>
    <p>Need to show task details here</p>
    <p>{!! link_to_route('tasks.index', 'Back to Tasks') !!}</p>
@endsection
