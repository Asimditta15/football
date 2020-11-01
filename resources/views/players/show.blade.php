@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="md:w-3/4 md:mx-auto">
            <div class="flex justify-between">




                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md px-5">

                    <h1 class="text-2xl font-bold my-10">
                        Name: {{ $players -> name }}
                    </h1>

                    <p class="mt-2 text-lg">
                        Team: {{$players -> team}}
                    </p>

                    <p class="mt-2">
                        Position: {{ $players -> position}}
                    </p>

                    <p class="mt-4">
                        <a href="{{ $players -> path.('/edit')}}"> Edit Players

                        </a>
                    </p>

                    <form class="mt-4" method="post" action="{{ $players -> path }}">
                        @method ('DELETE')
                        @csrf
                        <button type="submit">
                            <i>Delete Players</i>
                        </button>
                    </form>
                </div>
                <img class="w-25 mr-5" src="/img/footballer.png">
            </div>
        </div>
    </main>
@endsection
