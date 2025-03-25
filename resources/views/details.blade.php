@extends("layouts.master")
@section("titolo", "Corsa $train->id")
@section("contenuto")
    <style>
        .detCont {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
    </style>
    <div class="container detCont">
        <x-details-card>
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
            <x-slot:id>
                {{ $train["id"] }}
            </x-slot:id>
            <x-slot:nome>
                {{ $train["nome"] }}
            </x-slot:nome>
            <x-slot:ritardo>
                {{ $train["ritardo"] }}
            </x-slot:ritardo>
        </x-details-card>
    </div>
@endsection