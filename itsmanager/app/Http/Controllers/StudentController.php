<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();

        return view("student.index", [
            "students" => $students,
        ]);
    }

    public function create() {
        $fields = [
            [
                "name" => "name",
                "type" => "text",
                "label" => "Nome"
            ],
            [
                "name" => "surname",
                "type" => "text",
                "label" => "Cognome"
            ],
            [
                "name" => "birthdate",
                "type" => "date",
                "label" => "Data di nascita"
            ],
            [
                "name" => "sex",
                "type" => "select",
                "label" => "Sesso",
                "options" => [
                    [
                        "value" => "m",
                        "label" => "Maschio",
                    ],
                    [
                        "value" => "f",
                        "label" => "Femmina",
                    ]
                ]
            ],
            [
                "name" => "fiscal_code",
                "type" => "text",
                "label" => "Codice Fiscale",
            ],
            [
                "name" => "mail",
                "type" => "email",
                "label" => "Contatto email",
            ],
        ];

        return view("student.create", [
            "fields" => $fields,
        ]);
    }

    public function store(Request $request) {
        $validatedInput = $request->validate([
            "name" => "required",
            "surname" => "required",
            "birthdate" => "required|date",
            "mail" => "required|email",
            "sex" => "required",
            "fiscal_code" => "required",
        ]);

        Log::info($request->test);

        $newStudent = new Student();
        $newStudent->fill($validatedInput);
        $newStudent->save();

        return redirect("/students");
    }
}
