<?php

namespace App\Http\Controllers;

use App\Models\{About, Order, Portfolio, Tags, Team, User};
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        // $result = User::all();
        // $result = About::all();
        // $result = Order::all();
        // $result = Portfolio::all();
        // $result = Tags::all();
        // $result = Team::all();

        // $this->printf($result);
    }


    public function printf($message)
    {
        echo '<pre>' . print_r($message, true) . '/</pre>';
    }
}
