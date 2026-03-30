<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponses;
use Illuminate\Http\Request;

class AuthController extends Controller
{

use ApiResponses;

public function login(){

   $this->ok('Hello Login');

}

}
