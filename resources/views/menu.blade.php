@if(\Illuminate\Support\Facades\Session::has('huurder_Voornaam'))
    <ul>
        <li><a href="{{route('allePanden')}}">Ruimtes</a></li>
        <li><a href="{{ route('huurderIntresse') }}">Favorieten</a></li>
        <li id="user">
            <i class="fa fa-caret-down" aria-hidden="true"></i>
            <p>{{\Illuminate\Support\Facades\Session::get('huurder_Voornaam') }}</p>
            <div id="userPic">
                <img src="http://unsplash.it/52/52/?random">
            </div>
            <div id="userMenu">
                <ul>
                    <li><a>Mijn account</a></li>
                    <li><a href="{{route('huurderUitloggen')}}">Uitloggen</a></li>
                </ul>
            </div>
        </li>
    </ul>
    </nav>
    <nav id="schnitzelMenu" class="right closed">
        <img src="/public/assets/images/icons/schnitzel.svg" alt="schnitzel">
    </nav>
@elseif(\Illuminate\Support\Facades\Session::has('verhuurder_Voornaam'))
    <ul>
        <li><a href="#">Pand toevoegen</a></li>
        <li><a href="#">Mijn panden</a></li>
        <li><a href="#">Huurafspraken</a></li>
        <li>{{ \Illuminate\Support\Facades\Session::get('verhuurder_Voornaam') }}  {{\Illuminate\Support\Facades\Session::get('verhuurder_Achternaam')}}
            <img src="/public/assets/images/profile.png">
            <div id="userMenu">
                <ul>
                    <li><a>Mijn account</a></li>
                    <li><a href="{{route('verhuurderUitloggen')}}">Uitloggen</a></li>
                </ul>
            </div>
        </li>
    </ul>
    </nav>
    <nav id="schnitzelMenu" class="right closed">
        <img src="/public/assets/images/icons/schnitzel.svg" alt="schnitzel">
    </nav>
@else
    <ul>
        <li><a href="{{route('allePanden')}}">Ruimtes</a></li>
        <li><a href="{{route('verhuurderRegisteren')}}">Word Verhuurder</a></li>
        <li><a href="{{ route('huurderRegisteren') }}">Aanmelden</a></li>
        <li><a href="{{ route('huurderInloggen') }}">
                <button id="loginButton">Inloggen</button>
            </a></li>
    </ul>
    </nav>
    <nav id="schnitzelMenu" class="right closed">
        <img src="/public/assets/images/icons/schnitzel.svg" alt="schnitzel">
    </nav>
@endif