@extends('master')

@section('title', 'Order')

@section('content')
<div>
    <h1>Your order</h1>
    @if(!empty($order))
        @foreach($order as $item) 
        <p>{{$item}}</p>
        @endforeach
    @else
    <p>You haven't add anything to your order</p>
    @endif
</div>
@endsection
