<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;

class newsController extends Controller
{
    public function list() {
        return response() -> json(
            news::orderBy('id', 'asc') -> get()
        );
    }
}
