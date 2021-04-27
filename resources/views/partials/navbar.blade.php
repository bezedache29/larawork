<header class="flex justify-between items-center py-5">
    <div>LOGO</div>
    <nav>
        <ul class="flex">
            <li><a href="{{ route('jobs.index') }}" class="hover:text-green-500">Nos missions</a></li>
            @guest
                <li class="ml-5 hover:text-green-500"><a href="{{ route('login') }}">Se connecter</a></li>
                <li class="ml-5 hover:text-green-500"><a href="{{ route('register') }}">S'enregistrer</a></li>
            @else
                <li class="ml-5 hover:text-green-500"><a href="{{ route('home') }}">Tableau de bord</a></li>
                <li class="ml-5 hover:text-green-500">
                    <a href="{{ route('logout') }}" 
                        onclick="event.preventDefault(); document.querySelector('#logout-form').submit();">
                        Se déconnecter
                    </a>
                </li>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" class="hidden">
                    @csrf
                </form>
            @endguest
        </ul>
        
    </nav>
</header>