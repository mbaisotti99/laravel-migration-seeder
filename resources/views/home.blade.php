@vite(["resources/sass/app.scss", "resources/js/app.js"])
@extends("layouts.master")
@section("contenuto")
<style>
    h1{
        font-family: "Share Tech Mono", monospace;
    }
</style>
    <div class="container pb-5">
        <h1 class="text-center my-5">I treni da oggi in poi</h1>
        <div class="row">
            @foreach ($trainsFromToday as $train)
            <div class="col-6 my-3">
                <x-card>
                    <x-slot:parteDa>
                        {{ $train["stazPartenza"] }}
                    </x-slot:parteDa>
                    <x-slot:arrivaA>
                        {{ $train["stazArrivo"] }}
                    </x-slot:arrivaA>
                    <x-slot:oraPart>
                        {{ $train["oraPartenza"] }}
                    </x-slot:oraPart>
                    <x-slot:oraArrivo>
                        {{ $train["oraArrivo"] }}
                    </x-slot:oraArrivo>
                    <x-slot:cancellato>
                        {{ $train["cancellato"] }}
                    </x-slot:cancellato>
                    <x-slot:inOrario>
                        {{ $train["inOrario"] }}
                    </x-slot:inOrario>
                    <x-slot:azienda>
                        {{ $train["azienda"] }}
                    </x-slot:azienda>
                    <x-slot:codice>
                        {{ $train["codice"] }}
                    </x-slot:codice>
                </x-card>
            </div>
            @endforeach
        </div>
    </div>
@endsection