@extends("layouts.master")
@section("titolo", "404 Not Found")
@section("contenuto")
    <style>
        .notFound {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
    <div class="container notFound">
        <h1>
            <b>
                Pagina Non Trovata
            </b>
        </h1>
        <img src="/404.avif" alt="Not Found" class="my-5">
        <a href="/" class="btn btn-primary fs-1">Torna alla Home</a>
    </div>
@endsection