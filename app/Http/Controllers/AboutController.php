<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function indexo(): View
    {
        //get posts

        //render view with posts
        return view('about');
    }
}
