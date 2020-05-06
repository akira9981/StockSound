<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('review');
    }

    public function store(Request $request)
    {
        $post = $request->all();
        $data = ['user_id' => \Auth::id(), 'title' => $post['title'], 'body' => $post['body']];
        
        Review::insert($data);

        return redirect('/');
    }
}
