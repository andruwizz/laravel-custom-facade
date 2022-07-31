<?php

namespace App\Http\Controllers;

use App\Helpers\Facades\ShowString;

class MainController extends Controller
{  
    public function __invoke()
    {
        return ShowString::say();
    }
}
