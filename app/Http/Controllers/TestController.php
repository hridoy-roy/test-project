<?php

namespace App\Http\Controllers;

use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        return Test::first();

    }

}
