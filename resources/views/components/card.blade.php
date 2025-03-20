<style>
    .trainCard{
        padding: 20px;
        border: 4px double #000; /* doppia linea */
        border-radius: 15px;
        text-align: center;
        position: relative;
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
    .innerCard{
        width: 90%;
        height: 90%;
        border: 1px solid lightgray;
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
        <p>Partenza {{ $oraPart }}</p>
        <p>Arrivo {{ $oraArrivo }}</p>
    </div>