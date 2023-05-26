@extends('master')

@section('title', 'Order')

@section('content')
<div>
    <h1>Your order</h1>
    @if(!empty($order))
    <ul>
        @foreach($order as $item) 
        <li><a href="/order/{{$item->id}}">{{$item->id}}</a></li>
        @endforeach
    </ul>
    @yield('OrderInformation')
    @else
    <p>You haven't add anything to your order</p>
    @endif
</div>
@endsection
