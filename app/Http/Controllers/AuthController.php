<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return [
            "NIS" => "3103119161",
            "Name" => "Rifky Thara Basuki",
            "Phone" => "089669983475",
            "Class" => "XII RPL 5"
        ];
    }
}
