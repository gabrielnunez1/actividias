<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use PhpParser\Builder\Function_;

class actController extends Controller
{
    public Function prueba($param){
        return 'estoy dentro de act controller'.' '.$param;

    }
}
