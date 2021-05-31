@extends('layouts.main-layout')
@section('content')
    <h1>EMPLOYEES</h1>
    <ul>
        @foreach ($employees as $employee)
            <li>
                <a href="{{route('employee',$employee->id)}}">
                    <span>[{{$employee->id}}]<strong>{{$employee->firstname}} {{$employee->lastname}}</strong></span>
                </a>
            </li>
        @endforeach
    </ul>
@endsection