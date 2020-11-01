@extends ('layouts.app')

@section ('header')

    <div class="mt-3  text-4xl mb-8">
        <h1>Add a Player</h1>
    </div>

@endsection

@section ('content')

    <form method="post" action="/players/">

        @csrf

        <div class="flex flex-wrap">
            <div class="w-1/2">
                <label class="text-lg mb-1 block" for="name">
                    Players Name
                </label>

                <input class="mb-4 block w-2/5 @error ('name') border border-red-500 @enderror"
                       type="text" name="name" data-lpignore="true" autocomplete="off" placeholder="e.g. bob" />

                @error ('name')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>

        <div class="flex flex-col flex-wrap">
            <div class="w-1/4">
                <label class="text-lg mb-1 block" for="team">
                    Team Name
                </label>

                <input class=" mb-4 block w-4/5 @error ('team') border border-red-500 @enderror"
                       type="text" name="team" data-lpignore="true"
                       autocomplete="off" placeholder="e.g. Halifax Town" />

                @error ('team')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="w-1/4">
                <label class="text-lg mb-1 block" for="position">
                    Players Position
                </label>

                <input class="mb-4 block w-4/5 @error ('position') border border-red-500 @enderror"
                       type="text" name="position" data-lpignore="true"
                       autocomplete="off" placeholder="e.g. Striker" />

                @error ('position')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>

        <div class="flex flex-wrap mt-4">
            <div class="w-full">
                <button class=" mr-15 transition-all duration-500 ease-in-out bg-none hover:bg-blue-400  border border-blue-300 rounded-md px-2 py-2" type="submit">Add Player</button>
                <a href="/">
                    <button class=" mr-15 transition-all duration-500 ease-in-out bg-none hover:bg-blue-400  border border-blue-300 rounded-md px-2 py-2" type="button">Cancel</button>
                </a>
            </div>
        </div>

    </form>

@endsection
