<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;

class PlayersController extends Controller
{

    public function index()
    {
        $players = players::all ();

        return view ('players.index', compact ('players'));
    }

    public function create()
    {
        return view ('players.create');
    }

    public function store(Request $request)
    {
        request () -> validate ([
            'name' => 'required|min:2|max:32',
            'team' => 'required|min:2|max:32',
            'position' => 'required|min:2|max:32'
        ]);

        $attributes = $request -> all (
            'name',
            'team',
            'position'
        );

        $players = players::create ($attributes);

        return redirect ($players -> path);
    }

    public function show(Players $players)
    {
        return view ('players.show', compact('players'));
    }

    public function edit(Players $players)
    {
        return view ('players.edit', compact ('players'));
    }

    public function update(Request $request, Players $players)
    {
        $attributes = request () -> validate ([
            'name' => 'required|min:2|max:32',
            'team' => 'required|min:2|max:32',
            'position' => 'required|min:2|max:32'
        ]);

        $players -> update ($attributes);

        return redirect ('/');
    }

    public function destroy(Players $players)
    {
        $players -> delete ();

        return redirect('/');
    }
}
