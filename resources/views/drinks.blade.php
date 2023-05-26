@extends('master')
@section('title', 'Drinks')
@section('content')
<div>
    <h1>Drinks</h1>
    @if(!empty($listOfDrinks))
        <ul>
            @foreach($listOfDrinks as $item) 
            <li><a href="/waters/{{$item->id}}">{{$item->name}}</a></li>
            @endforeach
        </ul>
    @else
    <p>Sorry, we don't have drinks in our storage now. Please, check it tommorow</p>
    @endif
    
</div>
@endsection
