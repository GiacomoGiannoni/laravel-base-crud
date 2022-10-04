@extends('layouts.main_layout')
@section('content')
    <h1>{{$comics -> title}}</h1>
    <h2>by {{$comics -> author}}</h2>
    <h3>release date: {{$comics -> release_date}}</h3>
    <h4>{{$comics -> pages}} pages</h4>
@endsection