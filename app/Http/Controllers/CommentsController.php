<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index () {
        $players = players::all ();
        return view('comments.index', compact('players'));
    }
}
