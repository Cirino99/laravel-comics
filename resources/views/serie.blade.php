@extends('templates.base')

@section('pageTitle', $pageTitle)

@section('mainContent')
<main>
    <section id="jumbotron"></section>
    <h1>{{$serie['series']}}</h1>
</main>
@endsection