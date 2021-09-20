@extends('layouts.main')
@section('container')
    <h2>{{ $title }}</h2>

    @foreach($portos as $porto)
     <article class= "mb-5">
       <h2> 
            <a href="/portos/{{ $porto['slug'] }}">{{ $porto['title'] }}</a>
       </h2>
        <img src={{ $porto['img'] }}>
        <h5>{{ $porto['name'] }}</h5>
        <h5>{{ $porto['body'] }}</h5>
     </article>   
    @endforeach

@endsection