@extends('layouts.main-layout')
@section('content')
    <h1>EMPLOYEES</h1>
    <ul>
        @foreach ($employees as $employee)
            <li>
                <div>
                    <span>[{{$employee->id}}]<strong>{{$employee->firstname}} {{$employee->lastname}}</strong></span>
                </div>
                <div>
                    <span><strong>TASK:</strong></span>
                    <ul>
                        @foreach ($employee->tasks as $task)
                            <p>{{$task->title}} . FATTO DA [{{$task->employee->lastname}}]</p>
                        @endforeach
                    </ul>
                </div>
                
            </li>
        @endforeach
    </ul>
@endsection