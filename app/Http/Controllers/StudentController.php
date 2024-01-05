<?php

namespace App\Http\Controllers;


use App\Models\Student;
use App\Models\Rayon;
use App\Models\Rombel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        $rayon = Rayon::all();
        $rombel = Rombel::all();

        return view('Students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Students.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'rayon_id' => 'required',
            'rombel_id' => 'required',
        ]);

        Student::create($request->all());

        return redirect()->route('student.index')->with('success', 'Berhasil menambahkan data student');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
