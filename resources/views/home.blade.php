@vite(["resources/sass/app.scss", "resources/js/app.js"])
@extends("layouts.master")
@section("contenuto")
<style>
    h1{
        font-family: "Share Tech Mono", monospace;
    }
    body{
        background-image: url("/backg.jpg");
    }
    .tit{
        background-color: white;
        padding: 5px;
        border: 1px solid black;
        border-radius: 10px;
        width: fit-content;
        margin: 0 auto;
    }
</style>
    <div class="container pb-5">
        <div class="tit my-5">
            <h1 class="text-center">I treni da oggi in poi</h1>
        </div>
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
        {{ $trainsFromToday->links('pagination::bootstrap-5') }}
    </div>
@endsection