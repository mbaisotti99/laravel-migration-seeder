<style>
    .canc {
        width: 100%;
        height: 50px;
        background-color: red;
        color: white;
        position: absolute;
        top: 35%;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 45px;
        opacity: 80%;
    }

    .trainDetCard {
        border: 2px solid lightgray;
        padding: 15px;
        border-radius: 15px;
    }
</style>
@if ($cancellato == "1")
    <div class="canc py-5">
        CANCELLATO
    </div>
@else
    <div class="trainDetCard text-center">
        <h2>Capotreno: <br> <b>{{ $nome }}</b></h2>

        <h3 class="my-4">Partenza: <br> <b>{{ $parteDa }} </b> {{ \Carbon\Carbon::parse($oraPart)->format("H:i d-m-Y ") }}
            <br> </h3>
        <h3 class="my-4">Arrivo: <br> <b>{{ $arrivaA }} </b> {{ \Carbon\Carbon::parse($oraArrivo)->format("H:i d-m-Y ") }}
            <br> </h3>
        <h4 class="fs-3">Treno By: <br><b>{{ $azienda }} ({{ $codice }})</b></h4>
        <h4 class="fs-3 my-3">Durata Corsa: 
            @php
            $diff = \Carbon\Carbon::parse($oraPart)->diff(\Carbon\Carbon::parse($oraArrivo));
            $ore = $diff->h + ($diff->days * 24);
            $minuti = $diff->i;
            @endphp
            <br>
            <b>
                {{$ore}} ore e {{ $minuti }} minuti
            </b>
        </h4>
        <span
            class="badge fs-3 my-3 <?= $inOrario == "1" ? "text-bg-success" : "text-bg-warning"?>"><?= $inOrario == "1" ? "In orario" : "In ritardo di $ritardo minuti"?></span>
    </div>
@endif
<a href="/" class="btn btn-primary fs-1 my-5">Torna alla Home</a>