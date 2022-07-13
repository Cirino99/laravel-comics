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
                    <h1>{{$serie['series']}}</h1>
                    <span>{{$serie['price']}}</span>
                    <p>{{$serie['description']}}</p>
                </div>
                <div class="advertisement">
                    <span>ADVERTISEMENT</span>
                    <img src="{{asset('/images/adve.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
</main>
@endsection