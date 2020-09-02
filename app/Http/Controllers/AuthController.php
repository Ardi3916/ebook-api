<?php

namespace App\Http\Controllers;

use Illuminate\HHttp\Request;

class AuthController extends Controller
{
    public function me(){
        return "NIS : 3103 118 022,
               Name : Ardi Saputra,
               Gender : Male,
               Phone : +628 9542 2813 477,
               Class : XII RPL 1";
    }
}