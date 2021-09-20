<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Innovators;
use App\Models\Articles;

class TestController extends Controller
{
    public function index() {
        
        $articles = Articles::latest()->get();

        return view('test ', [
            'articles' => $articles,           
        ]);

    }
}
