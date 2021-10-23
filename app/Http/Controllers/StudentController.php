<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Student::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = new Student();
        $student->studentName =request('studentName');
        $student->score =request('score');
        $student->save();
        return "student added successfuly";
       // return redirect('/createS');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $student= Student::find($id);
       return view('/edit')->with('students',$student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student, $id)
    {
       
            // $this->validate($request, [
            //     'studentName' => 'required',
            //     'score' => 'required
            // ])
        $student = Student::find($id);
        $student->id;
        $student->studentName =$request->input('studentName');
        $student->score =$request->input('score');
        $student->save();
        return "Student Updated Successfuly";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student,  $id)
    {
       $student= Student::find($id);
       $student->delete();
        return "Student Deleted Successfuly";
    }
}
