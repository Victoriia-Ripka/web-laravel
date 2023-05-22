@extends('master')
@section('title', 'Pizza')
@section('content')
<div>
    <h1>Pizzas</h1>
    @if(!empty($listOPizzas))
        <ul>
            @foreach($listOPizzas as $item) 
            <li><a href="/pizza/{{$item->id}}">{{$item->name}}</a></li>
            @endforeach
        </ul>
    @else
    <p>Sorry, we don't have pizzas in our storage now. Please, check it tommorow</p>
    @endif
</div>
@endsection
