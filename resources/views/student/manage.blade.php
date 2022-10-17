@extends('layouts.app')
@section('title','Manage Student')
@section('content')
    @if(count($students)<=0)
        <h1>Không có dữ liệu</h1>
    @else
        <h1 style="text-align: center">Manage Student</h1>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Fullname</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->fullname}}</td>
                    <td>{{$student->birthday}}</td>
                    <td>{{$student->address}}</td>
                    <td><a class="btn btn-outline-warning" href="/students/{{$student->id}}/edit" role="button">Edit</a></td>
                </tr>
            @endforeach
        </table>
        <a href="/students/add" class="btn btn-outline-info">Add new student</a>

    @endif
@endsection