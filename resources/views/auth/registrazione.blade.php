@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
<section>
    <div class="row justify-content-center">
        <div class="col-12 col-lg-5">
            <h2 class="fw-semibold mb-4 text-center">Nuovo utente</h2>
            <form method="POST" action="{{ route('registrazione') }}">
                <div class="form-floating mb-3">
                    <input name="nome" type="text" class="form-control border-top-0 border-start-0 border-end-0 border-2 border-black  border-bottom-3 rounded-0 bg-transparent no-outline" placeholder="Nome" required="true">
                    <label>Nome</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="cognome" type="text" class="form-control border-top-0 border-start-0 border-end-0 border-2 border-black  border-bottom-3 rounded-0 bg-transparent no-outline" placeholder="Nome" required="true">
                    <label>Cognome</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="username" type="text" class="form-control border-top-0 border-start-0 border-end-0 border-2 border-black  border-bottom-3 rounded-0 bg-transparent no-outline" placeholder="Username" required="true">
                    <label>Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control border-top-0 border-start-0 border-end-0 border-2 border-black  border-bottom-3 rounded-0 bg-transparent no-outline" placeholder="Indirizzo email" required="true">
                    <label>Indirizzo email</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="password" id="pwd"  type="password" class="form-control border-top-0 border-start-0 border-end-0 border-2 border-black  border-bottom-3 rounded-0 bg-transparent no-outline" placeholder="Password" required="true" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&amp;*-:_]).{8,}$" oninvalid="this.setCustomValidity('Minimo otto caratteri, almeno una lettera maiuscola, una lettera minuscola, un numero e un carattere speciale')" oninput="this.setCustomValidity('')">
                    <label>Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input id="cpwd" type="password" class="form-control border-top-0 border-start-0 border-end-0 border-2 border-black  border-bottom-3 rounded-0 bg-transparent no-outline" placeholder="Conferma password" required="true">
                    <label>Conferma password</label>
                </div>
                <div class="form-floating mb-3">
                    <input id="datanascita" type="text" class="form-control border-top-0 border-start-0 border-end-0 border-2 border-black  border-bottom-3 rounded-0 bg-transparent no-outline" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Data nascita" required="true">
                    <label>Data di nascita</label>
                </div>
                <div class="form-floating mb-3">
                    <input id="tel" type="tel" class="form-control border-top-0 border-start-0 border-end-0 border-2 border-black  border-bottom-3 rounded-0 bg-transparent no-outline" placeholder="Telefono" required="true" pattern="[0-9]{10}" oninvalid="this.setCustomValidity('Richiede 10 numeri')" oninput="this.setCustomValidity('')">
                    <label>Telefono</label>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" >Sesso</label>
                    <select required class="form-select border-top-0 border-start-0 border-end-0 border-2 border-black  border-bottom-3 rounded-0 bg-transparent no-outline" >
                        <option value="">...</option>
                        <option value="1">Maschio</option>
                        <option value="2">Femmina</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" >Tipo utente</label>
                    <select required class="form-select border-top-0 border-start-0 border-end-0 border-2 border-black  border-bottom-3 rounded-0 bg-transparent no-outline" >
                        <option value="">...</option>
                        <option value="1">Cliente</option>
                        <option value="2">Staff</option>
                    </select>
                </div>
                <button name="login" type="submit" class="my-3 loader border-0 bg-black text-white p-3 text-center fw-bold text-uppercase d-block w-100 mb-3 lh-1 rounded">registrati</button>
                <a href="{{ route('login') }}" class="spa text-center text-black d-block">Hai già un'account? Accedi</a>
            </form>
        </div>
    </div> 
</section>
@endsection