<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare your variables and assign the values
        $name = "Donald Trump";
        $age = "75";

        // Add the variables in a $data associative array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // Set cookie variables
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $cookieMinutes = 1;
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        $cookieSecure = false;
        $cookieHttpOnly = true;

        // Create the cookie
        $cookie = Cookie::make($cookieName, $cookieValue, $cookieMinutes, $cookiePath, $cookieDomain, $cookieSecure, $cookieHttpOnly);

        // Return response with JSON data, status code 200, and the cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}
