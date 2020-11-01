@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="md:w-3/4 md:mx-auto">
            <div class="flex justify-between">




                <div class="flex flex-col w-80 break-words bg-white border border-2 rounded shadow-md px-5">

                    <h1 class="text-3xl text-center font-bold my-10 mb-19">
                        Name: {{ $players -> name }}
                    </h1>

                    <p class="mt-12 text-lg border border-blue-400 border-lg rounded py-2 px-2 ">
                        Team: {{$players -> team}}
                    </p>

                    <p class="mt-12 text-lg border border-blue-400 border-lg rounded py-2 px-2 ">
                        Position: {{ $players -> position}}
                    </p>

                    <p class="mt-12 transition-all duration-500 ease-in-out bg-none hover:bg-blue-400  border border-blue-300 rounded-md text-lg border border-blue-400 border-lg rounded py-2 px-2 ">
                        <a href="{{ $players -> path.('/edit')}}"> Edit Players

                        </a>
                    </p>

                    <form class="mt-12 transition-all duration-500 ease-in-out bg-none hover:bg-blue-400  border border-blue-300 rounded-md text-lg border border-blue-400 border-lg rounded py-2 px-2 " method="post" action="{{ $players -> path }}">
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
