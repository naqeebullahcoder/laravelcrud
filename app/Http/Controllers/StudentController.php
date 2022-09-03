<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $search = $request['search']??"";
        if($search !=""){
            $students = Students::where('name', "LIKE", "%$search%")->orWhere('email', "LIKE", "%$search%")->orWhere('age', 'LIKE', "%$search%")->get();
        }
        else{
            $students = DB::table('students')
                           ->select('students.*', 'teachers.name AS TeacherName', 'managers.age AS ManagerName')
                           ->join('teachers', 'teachers.id', 'students.fk_teacher_id')
                           ->join('managers','managers.id', 'students.fk_manager_id')
                           ->get();
                        //    dd($students);
        }

        return view('student.index',compact('students', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $students = new Students();

        $students->name= $request->name;
        $students->email = $request->email;
        $students->age = $request->age;

        $students->save();

        return redirect('/student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $student = Students::find($id);
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        $student = Students::where('id', $id)->first();
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){

        $id =$request->id;
        $students = Students::where('id', $id)->first();
        $students->name = $request->name;
        $students->email = $request->email;
        $students->age = $request->age;
        $students->save();
        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

    $student = Students::where('id',$id)->delete();
     return redirect('student');
    }
}
