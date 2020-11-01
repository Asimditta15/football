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
            <div class="w-full">
                <label class="block" for="name">
                    Players Name
                </label>

                <input class="block w-2/5 @error ('name') border border-red-500 @enderror"
                       type="text" name="name" data-lpignore="true" autocomplete="off" placeholder="e.g. bob" />

                @error ('name')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>
        </div>

        <div class="flex flex-col flex-wrap">
            <div class="w-1/2">
                <label class="block" for="team">
                    Team Name
                </label>

                <input class="block w-4/5 @error ('team') border border-red-500 @enderror"
                       type="text" name="team" data-lpignore="true"
                       autocomplete="off" placeholder="e.g. Halifax Town" />

                @error ('team')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="w-1/2">
                <label class="block" for="position">
                    Players Position
                </label>

                <input class="block w-4/5 @error ('position') border border-red-500 @enderror"
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
                <button class="nav-button" type="submit"><i class="fas fa-paw mr-2"></i>Add Player</button>
                <a href="/">
                    <button class="nav-button" type="button"><i class="fas fa-paw mr-2"></i>Cancel</button>
                </a>
            </div>
        </div>

    </form>

@endsection
