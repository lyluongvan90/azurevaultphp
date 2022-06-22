<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;

class TestController extends Controller
{
    public function show()
    {
        return secret("MySecretName");
    }
}