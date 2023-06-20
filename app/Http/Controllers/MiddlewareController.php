<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareController extends Controller
{
    public function firstRoute(){
        return 'This route is protected by the dummy middleware.';
    }

    public function secondRoute(){
        return 'This route is 2nd protected by the dummy middleware.';
    }

    public function thirdRoute(){
        return 'This route is 3rd protected by the dummy middleware.';
    }
}
