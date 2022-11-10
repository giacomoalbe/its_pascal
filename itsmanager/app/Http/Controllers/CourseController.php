<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all();

        return view("course.index", [
            "courses" => $courses,
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
                "name" => "code",
                "type" => "text",
                "label" => "Codice"
            ],
            [
                "name" => "year",
                "type" => "text",
                "label" => "Anno di partenza"
            ],
            [
                "name" => "referent",
                "type" => "text",
                "label" => "Referente"
            ],
            [
                "name" => "type",
                "type" => "select",
                "label" => "Tipo",
                "options" => [
                    [
                        "value" => "dig_trans",
                        "label" => "Digital Transformation Specialist"
                    ],
                    [
                        "value" => "log",
                        "label" => "Logistica"
                    ],
                ]
            ],
        ];

        return view("course.create", [
            "fields" => $fields,
        ]);
    }

    public function store(Request $request) {
        $validatedInput = $request->validate([
            "name" => "required",
            "code" => "required",
            "year" => "required|numeric",
            "type" => "required"
        ]);

        $newCourse = new Course();
        $newCourse->fill($validatedInput);
        $newCourse->save();

        return redirect("/courses");
    }
}
