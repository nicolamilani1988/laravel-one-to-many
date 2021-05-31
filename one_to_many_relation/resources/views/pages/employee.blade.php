@extends('layouts.main-layout')
@section('content')
    <h1>
        <span>[{{$employee->id}}]<strong>{{$employee->firstname}} {{$employee->lastname}}</strong></span>
    </h1>
    <h2>Tasks Made:</h2>
    <ul>
        @foreach ($employee->tasks as $task)
            <li>
                <h3>{{$task->title}}</h3>
                <p>Description: {{$task->description}}</p>
            </li>
        @endforeach
    </ul>
@endsection