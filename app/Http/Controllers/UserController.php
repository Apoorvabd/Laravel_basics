<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function myName($name="apoorv"){
        return "welcome to me my self $name";
    }
};