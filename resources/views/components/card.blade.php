<style>
    .trainCard{
        padding: 20px;
        border: 4px double black; /* doppia linea */
        border-radius: 15px;
        text-align: center;
        position: relative;
        background-color: white;
    }
    .trainCard h3{
        font-size: 30px;
        padding: 15px 0;
    }
    .trainCard p {
        font-size: 20px;
    }
    .canc{
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
</style>

<div class="trainCard">
        @if ($cancellato == "1")
        <div class="canc py-5">
            CANCELLATO
        </div>
        @endif
    
        
        <h3>{{ $parteDa }} --> {{ $arrivaA }}</h3>
        <h4><b>{{ $azienda }} ({{ $codice }})</b></h4>
        <span class="badge fs-5 my-2 <?= $inOrario == "1" ? "text-bg-success" : "text-bg-warning"?>"><?= $inOrario == "1" ? "In orario" : "In ritardo"?></span>
        <p>Partenza {{ \Carbon\Carbon::parse($oraPart)->format("d-m-Y H:i") }}</p>
        <p>Arrivo {{ \Carbon\Carbon::parse($oraArrivo)->format("d-m-Y H:i") }}</p>
    </div>