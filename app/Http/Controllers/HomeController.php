<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(){
        $user = "Teste";
        return Inertia::render('home', [
            'user' => $user
        ]);
    }

    public function about(){
        return Inertia::render('about');
    }
}
