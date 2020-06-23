<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subPages;

class pagesController extends Controller
{
    public function list(){
        return response() -> json(subPages::orderBy('id', 'desc')-> get());
    }
}
