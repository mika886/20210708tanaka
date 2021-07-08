<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildController extends Controller
{
    public function building()
    {
        return "建物です";
    }

    public function show($room)
    {
        return "部屋番号は".$room."です";
    }
}