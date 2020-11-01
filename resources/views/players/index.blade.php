@extends('layouts.app')

@section ('header')
    <div class="flex justify-between">
        <div class="text-4xl mb-8">
            <h1>Players</h1>
        </div>
        <div>
            <div class="mr-2">
                <a href="/players/"><i class="fas fa-paw mr-2"></i>Add a Player</a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="grid gap-x-6 grid-cols-4">

            @foreach($players as $p)
                <div class="bg-blue-300  mb-4 px-5 py-4 border rounded border-gray-500" >
                    <div class="flex justify-between">
                        <a href="{{ $p -> path }}">{{ $p -> name }}</a>
                        <img class="w-10 mr-5" src="img/footballer.png">
                    </div>

                    <div class="flex justify-between mx-50 my-1">
                        <p class="mt-4">
                            <a class="hover:bg-blue-400  border border-blue-300 rounded-md mr-5 px-2 py-2" href="{{ $p -> path.('/edit')}}"> Edit Player
                            </a>
                        </p>

                        <form class="mt-4" method="post" action="{{ $p -> path }}">
                            @method ('DELETE')
                            @csrf
                            <button  type="submit">
                                <i class="hover:bg-blue-400  border border-blue-300 rounded-md mr-5 px-2 py-2">Delete Player</i>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
