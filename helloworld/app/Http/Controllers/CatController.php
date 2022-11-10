<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index() {
        $cats = Cat::index();

        return view("cats", [
            "cats" => $cats
        ]);
    }

    public function add() {
        $c = new Cat();
        Cat::addAndSave($c);
        
        return redirect("/cats");
    }
}
