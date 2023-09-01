@extends('students.layout')
@section('content')

<br>
<div class="card">
    <div class="row">
        <div class="col-lg-11">
            <h2>Student Page</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="card-body">
    <div class="card-body">
        <h5 class="card-title">Name : {{ $student->student_name }}</h5>
        <p class="card-text">Course : {{ $student->course }}</p>
        <p class="card-text">Fee : {{ $student->fee }}</p>
    </div>
    </hr>
</div>
</div>
@endsection