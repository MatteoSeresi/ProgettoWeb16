@extends('layouts.public')

@section('title', 'Aziende')

@section('content')
<section id="azienda">
    <div id="high_c">
        <h1>NOME AZIENDA</h1>
    </div>
    <div id="mid_c">
        <img src="lebron.jpg" alt="immagine azienda"> 
    </div>
    <center id="low_c">
        <div id="slot_img">
            <img src="lebron.jpg" alt="posizione" onclick="window.open('https://it.wikipedia.org/wiki/LeBron_James')">
        </div>

        <div id="slot">
            <p>Questa è la descrizione dell'azienda</p>
        </div>

        <div id="slot">
            <p>Qui ci sono i contatti dell'azienda</p>
        </div>
    </center>
    <div id="end_c">
        <a href="" >Vai alle offerte</a>
    </div>
</section>
@endsection