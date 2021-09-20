@extends('layouts.main')
@section('container')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <h2>{{ $post['name'] }}</h2>
        <img src={{ $post['img'] }}>
        <h5>{{ $post['body'] }}</h5>
    </article>

    <a href="/portofolios"> kembali </a>
@endsection