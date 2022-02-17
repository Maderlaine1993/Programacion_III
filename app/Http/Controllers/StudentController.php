<?php

namespace App\Http\Controllers {

    use App\Models\Student;
    use Illuminate\Http\Request;

    class StudentController extends Controller
    {
        //Formulario del usuario
        public function studentform(){
            return view('students.studentform');
        }

        public function save(Request $request){
            $userdata = request()->except('_token');
            Student::insert($userdata);

            return back()->with('SGuardar', 'Estudiante Registrado');
        }
    }
}
