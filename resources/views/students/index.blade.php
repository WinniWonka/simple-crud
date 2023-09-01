{{-- @extends('students.layout')
@section('content')

<div class="text-center">
    <br>
    <h2>Student Management System - CRUD</h2>
</div>

<div class="row justify-content-between">
    <div class="text-left">
        <a class="btn btn-success" href="{{ route('students.create') }}">Create New Student</a>
    </div>
    <div class="text-right">
        <a class="btn btn-success" href="{{ url('/') }}">Home</a>
    </div>
</div>

<br>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th class="text-left">No</th>
            <th class="text-center">Name</th>
            <th class="text-center">Course</th>
            <th class="text-center">Fee</th>
            <th width 280px class="text-center">Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td class="text-center">{{ $student->student_name }}</td>
            <td class="text-center">{{ $student->course }}</td>
            <td class="text-center">{{ $student->fee }}</td>
            <td class="text-center">
                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('students.edit' ,$student->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>
    {{$students->links()}}
</div>

@endsection --}}

@extends('students.layout')
@section('content')
<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="{{url('students')}}" method="get">
            <input class="form-control me-1" type="search" name="keySearch" value="{{ Request::get('keySearch') }}"
                placeholder="Search By Name" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Search</button>
        </form>
    </div>

    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href="{{ route('students.create') }}" class="btn btn-primary">+ Add Student</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-left">No</th>
                <th class="text-center">Name</th>
                <th class="text-center">Course</th>
                <th class="text-center">Fee</th>
                <th width 280px class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ ++$i }}</td>
                <td class="text-center">{{ $student->student_name }}</td>
                <td class="text-center">{{ $student->course }}</td>
                <td class="text-center">{{ $student->fee }}</td>
                <td class="text-center">
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('students.edit' ,$student->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$students->links()}}
</div>
<!-- AKHIR DATA -->
@endsection