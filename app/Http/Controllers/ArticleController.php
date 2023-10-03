<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('articles/index');
    }
}
