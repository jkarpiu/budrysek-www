<?php

namespace App\Http\Controllers;

use Request;
use App\comments;

class commentsController extends Controller
{
    public function list() {
        $articleId = Request::only(['articleID']);
        return response() -> json(comments::where('articleID', $articleId)
                                            -> orderBy('id', 'desc')
                                            -> get());
    }
}
