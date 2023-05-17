@extends('layouts.public')

@section('title', 'Aziende')

@section('content')
    @isset($aziende)
        foreach($aziende as $azienda)
        <section id="azienda">
            <div id="high_c">
                <img src="../../public/images/lebron.jpg" alt="immagine azienda">
                <h1>Nome azienda: {{$azienda->Ragione_Sociale}}</h1>
            </div>
            <div id="low_c">
                <div id="slot">
                    <iframe src="https://maps.google.com/maps?width=200&amp;height=200&amp;hl=en&amp;
                        q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"  width="200" height="200"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a>
                    </iframe>
                </div>

                <div id="slot">
                    <p>Questa è la descrizione dell'azienda</p>
                </div>

                <div id="slot">
                    <p>Qui ci sono i contatti dell'azienda</p>
                </div>
            </div>
            <div id="end_c">
                <button onclick="window.open('https://www.youtube.com/')">Vai alle offerte</button>
            </div>
        </section>
        @endforeach
    @endisset()
@endsection