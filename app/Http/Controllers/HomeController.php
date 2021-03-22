<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function __invoke()
    {

        $usersResponse = Http::get('https://jsonplaceholder.typicode.com/users');

        $users = $usersResponse->json();

        return view('home', compact('users'));
    }
}
