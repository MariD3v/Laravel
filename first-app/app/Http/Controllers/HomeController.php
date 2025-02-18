<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $welcomeMessage = env('WELCOME_MESSAGE', 'Mensaje por defecto');
        return $welcomeMessage;
    }
}