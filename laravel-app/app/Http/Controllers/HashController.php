<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import the Hash facade

class HashController extends Controller
{
    public function hash(){
        $password = '1234';
        $hashedPassword = Hash::make($password); // Use Hash facade to generate hashed password

        echo $hashedPassword;
    }
}
