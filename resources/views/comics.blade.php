@extends('templates.base')

@section('pageTitle', 'Comics')

@section('mainContent')
<main>
    <section id="jumbotron"></section>
    <section id="main-content">
        <div id="series">
            <div id="current-series">CURREN SERIES</div>
            <div id="cards-series">
                @foreach ($arrSeries as $serie)
                    <div class="card-serie">
                        <a href="{{ route('serie', ['id' => $serie['id']])}}">
                            <img src="{{$serie['thumb']}}" alt="{{$serie['series']}}">
                            <span>{{$serie['series']}}</span>
                        </a>
                    </div>
                @endforeach
            </div>
            <div id="load-more">
                <a href="#">LOAD MORE</a>
            </div>
        </div>
    </section>
    <section id="shop-content">
        <div>
            @foreach ($arrShop as $material)
            <div>
                <img src="{{asset($material['img'])}}" alt="{{$material['text']}}">
                <span>{{$material['text']}}</span>
            </div>
            @endforeach
        </div>
    </section>
</main>
@endsection