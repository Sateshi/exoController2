<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $crew = (object)[
            [
                "name" => "Johan",
                "fonction" => "Coach",
                "url" => "http://placekitten.com/200/300"
            ],
            [
                "name" => "Alixe",
                "fonction" => "Coach",
                "url" => "http://placekitten.com/200/300"
            ],
            [
                "name" => "Cactus",
                "fonction" => "Coach",
                "url" => "http://placekitten.com/200/300"
            ],

        ];
        return view("pages.users",compact("crew"));
    }
}
