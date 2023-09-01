{{-- @extends('students.layout')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">
            <h2>Add New Students</h2>

        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}">Back</a>
        </div>
    </div>

</div>

@if ($errors->any())

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>
        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>
        @endforeach

    </ul>

</div>
@endif

<form action="{{ route('students.store') }}" method="POST">

    @csrf
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Name:</strong>
                <input type="text" name="student_name" value="{{Session::get('student_name')}}" class="form-control"
                    placeholder="Student Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course</strong>
                <input type="text" name="course" value="{{Session::get('course')}}" class="form-control"
                    placeholder="Course">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fee</strong>
                <input type="text" name="fee" value="{{Session::get('fee')}}" class="form-control" placeholder="Fee">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </div>
</form>

@endsection --}}

@extends('students.layout')

@section('content')
<!-- START FORM -->
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Students</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}">Back</a>
        </div>
    </div>
</div>

<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="student_name" class="col-sm-2 col-form-label">Student Name</label>
            <div class="col-sm-10">
                <input type="text" name="student_name" value="{{Session::get('student_name')}}" class="form-control"
                    placeholder="Student Name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="course" class="col-sm-2 col-form-label">Course</label>
            <div class="col-sm-10">
                <input type="text" name="course" value="{{Session::get('course')}}" class="form-control"
                    placeholder="Course">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fee" class="col-sm-2 col-form-label">Fee (Rp.)</label>
            <div class="col-sm-10">
                <input type="text" name="fee" value="{{Session::get('fee')}}" class="form-control" placeholder="Fee">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Save</button>
            </div>
        </div>

    </div>
</form>
<!-- AKHIR FORM -->
@endsection