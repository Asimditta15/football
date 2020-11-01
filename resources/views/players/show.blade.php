@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="md:w-1/3 md:mx-auto">

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <h1 class="class=text-xl font-bold mb-2">
                    Name: {{ $players -> name }}
                </h1>

                <p class="mt-2">
                    Team: {{$players -> team}}
                </p>

                <p class="mt-2">
                    Position: {{ $players -> position}}
                </p>

                <p class="mt-4">
                    <a href="{{ $players -> path.('/edit')}}"> Edit Players
                        <i class="fas fa-edit"></i>
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
        </div>
    </main>
@endsection
