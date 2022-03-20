<?php

namespace App\Http\Controllers {

    use App\Models\Student;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Log;

    class StudentController extends Controller
    {
        //Formulario del usuario
        public function studentform(){
            return view('students.studentform');
        }

        public function save(Request $request)
        {
            try{//variable $userdata
                $usedata = request()->except('_token');
                Student::insert($userdata);

            }catch (\Exception $e){

                Log::debug($e->getMessage());

                return view('students.errors');
            }

            return back()->with('SGuardar', 'Estudiante Registrado');



        }

    }
}
