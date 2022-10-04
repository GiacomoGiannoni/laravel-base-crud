@extends('layouts.main_layout')
@section('content')
    <ul>
        @foreach($comics as $comic)
        <li>
            <a href="{{route('details', $comic -> id)}}">
                {{ $comic -> title }}
            </a>
        </li>
        @endforeach
    </ul>
@endsection