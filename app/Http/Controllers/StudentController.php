<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Grade;

class StudentController extends Controller
{
    public function index()
    {
        $collection = Student::orderBy('grade_id', 'ASC')->get();
        $grade = new GradeController();
        $grades_id= $grade->getGradeWhereInstitution();
        return view('students.index', compact('collection','grades_id'));
    }

    public function store(StoreStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }


    public function edit(Student $student)
    {
        //
    }


    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    public function destroy(Student $student)
    {
        //
    }

    public function importStudent(Request $request)
    {
        $path1 = $request->file('file')->store('temp'); 
        $path=storage_path('app').'/'.$path1;  
        Excel::import(new StudentImport,$path);
        return back()->with('success','Excel telah sukses di import');
    }
}
