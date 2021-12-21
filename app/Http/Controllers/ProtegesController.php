<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Protege;

class ProtegesController extends Controller
{
    public function list() {
    	return response() -> json(Protege::orderBy('id')->get());
    }
}
