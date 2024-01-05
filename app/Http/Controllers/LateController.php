<?php

namespace App\Http\Controllers;

use App\Models\Late;
use App\Models\Student;
use Illuminate\Http\Request;

class LateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $late = Late::all();
        $student = Student::all();
        return view('late.index', compact('late', 'student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = Student::all();
        return view('late.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date_time_late' => 'required',
            'information' => 'required',
            // 'bukti' => 'required',
            'student_id' => 'required',
        ]);

        Late::create([
            'date_time_late' => $request->date_time_late,
            'information' => $request->information,
            // 'bukti' => $request->bukti,
            'student_id' => $request->student_id,
        ]);

        return redirect()->route('late.home')->with('succes', 'berhasil menambahkan data siswa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Late $late)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Late $late, $id)
    {
        $late = Late::find($id);
        return view('late.edit', compact('late'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Late $late)
    {
        $request->validate([
            'date_time_late' => 'required',
            'information' => 'required',
            // 'bukti' => 'required',
            'student_id' => 'required',
        ]);

        Late::create([
            'date_time_late' => $request->date_time_late,
            'information' => $request->information,
            // 'bukti' => $request->bukti,
            'student_id' => $request->student_id,
        ]);

        return redirect()->route('late.home')->with('succes', 'berhasil menambahkan data siswa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Late::where('id', $id)->delete();
        return redirect()->route('late.home')->with('succes', 'Berhasil menghapus data siswa');
    }
}
