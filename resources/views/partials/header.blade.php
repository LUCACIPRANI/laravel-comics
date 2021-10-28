<header>
    <div id='logo'>
        <img src="{{ asset('images/dc-logo.png') }}" alt="">
    </div>
    <div class="main-menu">
        <ul>
            <li><a class="{{ Request::route()->getName() == 'home-page' ? 'active' : ''}}" href="{{ route('home-page')}}">Homepage</a></li>
            <li><a class="{{ Request::route()->getName() == 'about-page' ? 'active' : ''}}" href="{{ route('about-page')}}">About us</a></li>
            <li><a class="{{ Request::route()->getName() == 'contacts-page' ? 'active' : ''}}" href="{{ route('contacts-page')}}">Contacts</a></li>
            <li><a class="{{ Request::route()->getName() == 'comics-page' ? 'active' : ''}}" href="{{ route('comics-page')}}">Comics</a></li>
        </ul>

    </div>
</header>