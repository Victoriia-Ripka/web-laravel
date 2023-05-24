@extends('master')
@section('title', 'Drinks')
@section('content')
<div>
    @if(!empty($item))
        <h1>{{$item->name}}</h1>
        <p>{{$item->info}}</p>
        <p>price: ${{$item->price}}</p>
    @else
    <p>Sorry, we don't have such item in our storage now.</p>
    @endif
</div>
@endsection
