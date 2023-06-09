@extends('layouts.public')

@section('title', 'Login')

@section('content')
<section>
    
    <div class="row justify-content-center">
        <div class="col-12 col-lg-5 text-center">
            <h2 class="fw-semibold mb-4">Effettua l'accesso</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input name="username" type="text" class="form-control border-top-0 border-start-0 border-end-0 border-2 border-black  border-bottom-3 rounded-0 bg-transparent no-outline" placeholder="Username" required="true">
                    <label>Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control border-top-0 border-start-0 border-end-0 border-2 border-black  border-bottom-3 rounded-0 bg-transparent no-outline" placeholder="Password" required="true">
                    <label>Password</label>
                </div>
                <button type="submit" class="loader border-0 bg-black text-white p-3 text-center fw-bold text-uppercase d-block w-100 mb-3 lh-1 rounded">accedi</button>
                <a href="{{ route('registrazione') }}" class="text-black d-block spa">Se non sei ancora registrato crea il tuo account</a>
            </form>

            {{ Form::open(array('route' => 'login')) }}
            
             <div  class="wrap-input">
                 <p> Se non hai già un account <a  href="{{ route('registrazione') }}">registrati</a></p>
             </div>            
             <div  class="wrap-input">
                {{ Form::label('Utente', 'Nome Utente') }}
                {{ Form::text('Utente', '', ['class' => 'input','id' => 'Utente']) }}
                @if ($errors->first('Utente'))
                <ul class="errors">
                    @foreach ($errors->get('Utente') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('Password', 'Password') }}
                {{ Form::password('Password', ['class' => 'input','id' => 'Password']) }}
                @if ($errors->first('Password'))
                <ul class="errors">
                    @foreach ($errors->get('Password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div class="container-form-btn">                
                {{ Form::submit('Login') }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>
</section>
@endsection