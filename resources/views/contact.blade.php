@extends('layouts.main')
@section('container')
<center>
    <h1>{{ $title }}</h1>    
    <img src={{ $img }} class="img-thumbnail rounded-circle">
    <h5 align-center>{{ $name }}</h5>
    <h5>{{ $email }}</h5>
</center>
@endsection