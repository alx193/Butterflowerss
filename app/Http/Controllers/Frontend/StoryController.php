<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function story()
    {
        return view ('frontend.infopages/story');
    }
}
