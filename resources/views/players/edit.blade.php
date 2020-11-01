@extends ('layouts.app')

@section ('header')

    <div class="mt-3  text-4xl mb-8">
        <h1>Edit Details for {{ $players -> name }}</h1>
    </div>

@endsection

@section ('content')

    <form method="post" action="{{ $players -> path }}">

        @method ('PATCH')

        @csrf

        <div class="flex flex-col flex-wrap">
            <div class="w-1/3">
                <label class="text-lg mb-1 block" for="name">
                    Players Name
                </label>

                <input type class="mb-4 block w-3/5 @error ('name') border border-red-500 @enderror"
                       type="text" name="name" data-lpignore="true"
                       autocomplete="off" value="{{ $players -> name }}" />

                @error ('name')
                <div class=" my-1">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="w-1/2">
                <label class="text-lg mb-1 block" for="team">
                    Team
                </label>

                <input class="mb-4 block w-2/5 @error ('team') border border-red-500 @enderror"
                       type="text" name="team" data-lpignore="true"
                       autocomplete="off" value="{{ $players -> team }}" />

                @error ('team')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>

        </div>

        <div class="flex flex-wrap">
            <div class="w-1/2" >
                <label class="text-lg mb-1 block" for="position">
                    Position
                </label>

                <input class="mb-4 block w-2/5 @error ('position') border border-red-500 @enderror"
                       type="text" name="position" data-lpignore="true"
                       autocomplete="off" value="{{ $players -> position }}" />

                @error ('position')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>
        <div class="flex flex-wrap mt-8">
            <div class="w-full">
                <button class=" mr-15 transition-all duration-500 ease-in-out bg-none hover:bg-blue-400  border border-blue-300 rounded-md px-2 py-2" type="submit">Update Details</button>
                <a href="/">
                    <button class="transition-all duration-500 ease-in-out bg-none hover:bg-blue-400  border border-blue-300 rounded-md mr-5 px-2 py-2" type="button">Cancel</button>
                </a>
            </div>
        </div>

    </form>

@endsection
