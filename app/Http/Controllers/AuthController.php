<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiLoginRequest;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;

class AuthController extends Controller
{

use ApiResponses;

public function login(ApiLoginRequest $request){

   $this->ok($request->input('email'));

}

}
