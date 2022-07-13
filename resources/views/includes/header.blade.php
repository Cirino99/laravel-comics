<header>
    <nav>
        <a href="{{route('comics')}}">
            <img src="{{asset('images/dc-logo.png')}}" alt="">
        </a>
        <ul>
            @foreach (config('linksheader') as $link)
                <li>
                    <a class=" @if ($link['url'] == Route::currentRouteName()) active @elseif( $link['url'] == 'comics' & Route::currentRouteName() == 'serie') active @endif " href="{{ route($link['url'])}}">
                        {{$link['text']}}
                        @if ($link['url'] == Route::currentRouteName())
                        <div></div>
                        @elseif( $link['url'] == 'comics' & Route::currentRouteName() == 'serie')
                        <div></div>
                        @endif
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>