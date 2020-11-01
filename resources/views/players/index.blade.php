@extends('layouts.app')

@section ('header')
    <div class=" mt-10 flex justify-between">
            <h1 class="text-4xl my-auto font-bold mb-8">Players</h1>
            <a class="my-auto text-3xl my-auto font-bold mb-5 mr-10 transition-all duration-500 ease-in-out bg-none hover:bg-blue-200  border border-blue-300 rounded-md px-2 py-2" href="/players/">Add a Player</a>

    </div>
@endsection

@section('content')
    <main class="mt-10">
        <div class="grid gap-x-6 grid-cols-4">

            @foreach($players as $p)
                <div class="bg-blue-200  mb-5 px-5 py-4 border rounded border-black" >
                    <div class="flex justify-between mb-5">
                        <a class="my-auto ml-2 text-xl font-bold" href="{{ $p -> path }}">{{ $p -> name }}</a>
                        <img class="w-15 mr-5" src="img/footballer.png">
                    </div>

                    <div class="flex justify-between mx-50 my-1">
                        <p class="mt-4">
                            <a class="transition-all duration-500 ease-in-out bg-none hover:bg-blue-400  border border-blue-300 rounded-md mr-5 px-2 py-2" href="{{ $p -> path.('/edit')}}"> Edit Player
                            </a>
                        </p>

                        <form class="mt-4" method="post" action="{{ $p -> path }}">
                            @method ('DELETE')
                            @csrf
                            <button  type="submit">
                                <a class="transition-all duration-500 ease-in-out bg-none hover:bg-blue-400  border border-blue-300 rounded-md mr-5 px-2 py-2">Delete Player</a>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
