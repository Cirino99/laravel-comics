@extends('templates.base')

@section('pageTitle', $pageTitle)

@section('mainContent')
<main>
    <section id="jumbotron"></section>
    <section id="main-content-serie">
        <div class="copertina">
            <div class="container">
                <img src="{{$serie['thumb']}}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="my-row">
                <div class="text-serie">
                    <h1>{{$serie['title']}}</h1>
                    <span>{{$serie['price']}}</span>
                    <p>{{$serie['description']}}</p>
                </div>
                <div class="advertisement">
                    <span>ADVERTISEMENT</span>
                    <img src="{{asset('/images/adve.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div id="specifiche">
            <div class="container">
                <div class="my-row">
                    <div class="talent-serie">
                        <h2>Talent</h2>
                        <div class="divisor"></div>
                        <div class="talent-data">
                            <span class="name-spec">Art By:</span>
                            <p>
                                @foreach ($serie['artists'] as $artista)
                                    <span class="data-serie">{{$artista}}</span>, 
                                @endforeach
                            </p>
                        </div>
                        <div class="divisor"></div>
                        <div class="talent-data">
                            <span class="name-spec">Written By:</span>
                            <p>
                                @foreach ($serie['writers'] as $scrittori)
                                    <span class="data-serie">{{$scrittori}}</span>, 
                                @endforeach
                            </p>
                        </div>
                        <div class="divisor"></div>
                    </div>
                    <div class="spec-serie">
                        <h2>Spec</h2>
                        <div class="divisor"></div>
                        <div class="talent-data">
                            <span class="name-spec">Series:</span>
                            <p>
                                <span class="data-serie">{{$serie['series']}}</span>
                            </p>
                        </div>
                        <div class="divisor"></div>
                        <div class="talent-data">
                            <span class="name-spec">Us Price:</span>
                            <p>{{$serie['price']}}</p>
                        </div>
                        <div class="divisor"></div>
                        <div class="talent-data">
                            <span class="name-spec">On Sale Date:</span>
                            <p>{{$serie['sale_date']}}</p>
                        </div>
                        <div class="divisor"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection