<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prodeges;

class prodegesController extends Controller
{
    public function list() {
    	return response() -> json(prodeges:orderBy('id')->get());
    }
}
