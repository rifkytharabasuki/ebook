<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119161,
            "Name" => "Rifky Thara Basuki",
            "Gender" => "Male",
            "Phone" => 629669983475,
            "Class" => "XII RPL 5"
        ];
    }
}
