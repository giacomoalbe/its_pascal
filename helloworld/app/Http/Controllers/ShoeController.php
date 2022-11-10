<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoeController extends Controller
{
    public function index() {
        $shoes = [
            new Shoe("Silver"),
            new Shoe("Superga"),
            new Shoe("Stan Smith")
        ];
        
        return view("shoes", [
            "shoes" => $shoes,
        ]);
    }
}
