@extends('layouts.app')
@section('title',"Edit Student")
@section('content')
    <div class="container" style="margin-top: 20px">
        <h1>Add Student</h1>
        <a href="/students" class="btn btn-outline-info">Manage Student</a>
        <form method="post" action="" style="max-width: 450px">
            <div class="mb-3">
                <label for="txtFullName" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="txtFullName" name="txtFullName">
            </div>
            <div class="mb-3">
                <label for="txtBirthday" class="form-label">Birthday</label>
                <input type="text" class="form-control" id="txtBirthday" name="txtBirthday">
            </div>
            <div class="mb-3">
                <label for="txtAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="txtAddress" name=txtAddress>
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>
@endsection