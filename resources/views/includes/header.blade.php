<header>
    <nav>
        <img src="{{asset('images/dc-logo.png')}}" alt="">
        <ul>
            @foreach ($arrLinks as $link)
                <li>
                    <a class="<?php if($link['current']){ echo 'active'; } ?>" href="{{$link['url']}}">
                        {{$link['text']}}
                        @if ($link['current'])
                        <div></div>
                        @endif
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>