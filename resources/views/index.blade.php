@extends('layouts.app')
@section('content')

    @foreach ($applications as $elem)

        <p>Заголовок{{$elem->title}}</p>
        <a href="#">подробнее</a>
    @endforeach
