<main>
    <section id="jumbotron"></section>
    <section>
        <div id="series">
            <div id="current-series">CURREN SERIES</div>
            <div id="cards-series">
                @foreach ($arrSeries as $serie)
                    <div class="card-serie">
                        <img src="{{$serie['thumb']}}" alt="{{$serie['series']}}">
                        <span>{{$serie['series']}}</span>
                    </div>
                @endforeach
            </div>
            <div id="load-more">
                <a href="#">LOAD MORE</a>
            </div>
        </div>
</main>