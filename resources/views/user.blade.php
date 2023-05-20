@extends('layouts.userlayout')

@section('title', 'Area Utente')

@section('content')
<section id="us_ar">
    <div id="central">
        <div id="col_1"></div>
        
        <div id="col_2">
            <div id="dati">
                <p>Benvenuto {{ Auth::user()->Nome }} {{ Auth::user()->Cognome }}</p>
                <p>Nome: Mattia</p>
                <p>Cognome: Sisi</p>
                <p>Data di nascita: 01/07/2000</p>
                <p>Telefono: 3395855004</p>
                <p>Email: mattia.sisi30@gmail.com</p>
                <i class="fa fa-pencil" aria-hidden="true" onclick="window.open('{{ route('usermodify') }}')"></i>
            </div>
        </div>

        <div id="col_3"></div>
    </div>
    
</section>
@endsection


