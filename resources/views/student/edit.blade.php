@extends('layouts.app')
@section('title',"Edit Student")
@section('content')
    <div>
        <h1>Edit Student</h1>
        <a href="/students" class="btn btn-outline-info">Manage Student</a>
        <form method="post" action="" style="max-width: 450px">
            <div class="mb-3">
                <label for="txtID" class="form-label">ID</label>
                <input type="text" class="form-control" id="txtID" name="txtID" value="{{$student->id}}" readonly>
            </div>
            <div class="mb-3">
                <label for="txtFullName" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="txtFullName" name="txtFullName" value="{{$student->fullname}}">
            </div>
            <div class="mb-3">
                <label for="txtBirthday" class="form-label">Birthday</label>
                <input type="text" class="form-control" id="txtBirthday" name="txtBirthday" value="{{$student->birthday}}">
            </div>
            <div class="mb-3">
                <label for="txtAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="txtAddress" name=txtAddress value="{{$student->address}}">
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
@endsection