<nav class="sticky-top bg-old ">
    <div class="container-fluid container-lg p-0 border-bottom border-2 border-black">
        <table class="table text-nowrap text-center m-0 fw-black" style="min-width: auto; width: auto; margin: auto!important;">
            <tbody>
                <tr class="align-middle">
                    <td class="p-0">
                        <a href="{{ route('home') }}" class="p-3 lh-1 d-block spa text-black text-decoration-none active">
                            HOME
                        </a>
                    </td>
                    <td class="px-0">
                        <div class="vr"></div>
                    </td>
                    <td class="p-0">
                        <a href="{{ route('aziende') }}" class="p-3 lh-1 d-block spa type text-black text-decoration-none">
                            AZIENDE
                        </a>
                    </td>
                    <td class="px-0">
                        <div class="vr"></div>
                    </td>
                    <td class="p-0">
                        <a href="{{ route('catalogo') }}" class="p-3 lh-1 d-block spa type text-black text-decoration-none ">
                            CATALOGO
                        </a>
                    </td>
                    <td class="px-0">
                        <div class="vr"></div>
                    </td>
                    <td class="p-0">
                        <a href="{{ route('faq') }}" class="p-3 lh-1 d-block spa type text-black text-decoration-none ">
                            FAQ
                        </a>
                    </td>
                    <td class="px-0">
                        <div class="vr"></div>
                    </td>
                    <td class="p-0">
                        <a href="{{ route('contattaci') }}" class="p-3 lh-1 d-block spa type text-black text-decoration-none ">
                            CONTATTACI
                    </td>
                    @guest
                    <td class="px-0">
                        <div class="vr"></div>
                    </td>
                    <td class="p-0">
                        <a href="{{ route('login') }}" class="p-3 lh-1 d-block spa type text-black text-decoration-none ">
                            ACCEDI
                        </a>
                    </td>
                    @endguest
                    <td class="px-0">
                        <div class="vr"></div>
                    </td>
                        <!-- <td class="p-0">
                            <a href="{{ route('registrazione') }}" class="p-3 lh-1 d-block spa text-black text-decoration-none ">
                                REGISTRATI
                            </a>
                        </td> -->
                    @auth
                        <li><a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                        </form>
                    @endauth                                                           
                </tr>
            </tbody>
        </table>         
    </div>
</nav>