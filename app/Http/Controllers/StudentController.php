<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function list()
    {
        $student = Student::all();
        return view('pages.list', ['student' => $student]);
    }

    public function addStudent()
    {
        return view('pages.add');
    }

    public function postStudent(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->save();
        $request->session()->flash('status', 'Student Added successfully!');
        return redirect('/list');
    }

    public function editStudent($id)
    {
        $student = Student::find($id);
        return view('pages.edit', ['student' => $student]);
    }

    public function updateStudent(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update($request->all());
        $request->session()->flash('status', 'Student Updated successfully!');
        return redirect('list');
    }

    public function delete(Request $request, $id)
    {
        Student::find($id)->delete();
        $request->session()->flash('status', 'Student deleted successfully!');
        return redirect('list');
    }
}
