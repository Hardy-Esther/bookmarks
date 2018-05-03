<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $feed_items = [];

        if(Auth::check()){
            $feed_items = Auth::user()
                ->feed()
                ->paginate(20);
        }

        return view('index.index',compact('feed_items'));
    }
}
