@extends('layouts.public')

@section('title', 'Login')

@section('content')
<section>
    <div class="row justify-content-center">
        <div class="col-12 col-lg-5 text-center">
            <h2 class="fw-semibold mb-4">Nuovo utente</h2>
            <form>
                <div class="form-floating mb-3">
                    <input name="username" type="text" class="form-control border-top-0 border-start-0 border-end-0 border-2 border-black  border-bottom-3 rounded-0 bg-transparent no-outline" placeholder="Username" required="true">
                    <label>Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input id="pwd" name="password" type="password" class="form-control border-top-0 border-start-0 border-end-0 border-2 border-black  border-bottom-3 rounded-0 bg-transparent no-outline" placeholder="Password" required="true" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&amp;*-:_]).{8,}$" oninvalid="this.setCustomValidity('Minimo otto caratteri, almeno una lettera maiuscola, una lettera minuscola, un numero e un carattere speciale')" oninput="this.setCustomValidity('')">
                    <label>Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input id="cpwd" type="password" class="form-control border-top-0 border-start-0 border-end-0 border-2 border-black  border-bottom-3 rounded-0 bg-transparent no-outline" placeholder="Conferma password" required="true">
                    <label>Conferma password</label>
                </div>
                <button type="submit" class="my-3 loader border-0 bg-black text-white p-3 text-center fw-bold text-uppercase d-block w-100 mb-3 lh-1 rounded">registrati</button>
                <a href="{{ route('accedi') }}" class="spa text-black d-block">Hai già un'account? Accedi</a>
            </form>
        </div>
    </div>  
</section>
@endsection