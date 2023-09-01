<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keySearch = $request->keySearch;
        $paginateNum = 5;
        $students = Student::orderBy('student_name', 'asc')->paginate($paginateNum);
        if (strlen($keySearch)) {
            $students = Student::where('student_name', 'like', "%$keySearch%")->paginate($paginateNum);
        }

        return view('students.index', compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * $paginateNum);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        FacadesSession::flash('student_name', $request->student_name);
        FacadesSession::flash('course', $request->course);
        FacadesSession::flash('fee', $request->fee);
        $request->validate([
            'student_name' => 'required|alpha',
            'course' => 'required',
            'fee' => 'required',
        ]);

        $data = [
            'student_name' => $request->student_name,
            'course' => $request->course,
            'fee' => $request->fee,
        ];

        Student::create($data);

        return redirect()->route('students.index')
            ->with('success', 'Students created successfully. :)');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([

        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Students updated successfully. :)');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Students deleted successfully. :)');
    }
}