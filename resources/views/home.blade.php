@extends("layouts.master")
@section("titolo", "BoolTrains")
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
    .paginationCont{
        background-color: white;
        border: 1px solid black;
        border-radius: 10px;
        width: fit-content;
        padding: 10px;  
    }
    .pagination{
        margin: 0 15px;
    }
    .foot{
        display: flex;
        justify-content: space-between;
    }
</style>
    <div class="container pb-5">
        <div class="tit my-5">
            <h1 class="text-center">I treni da oggi in poi</h1>
        </div>
        <div class="row">
            @foreach ($trainsFromToday as $train)
            <div class="col-lg-6 col-sm-12 my-3">
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
                    <x-slot:id>
                        {{ $train["id"] }}
                    </x-slot:id>
                </x-card>
            </div>
            @endforeach
        </div>
        <div class="foot my-5">
            <a href="/lost" class="btn btn-primary fs-3">Vedi i treni che hai perso</a>
            <div class="paginationCont">
                {{ $trainsFromToday->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection