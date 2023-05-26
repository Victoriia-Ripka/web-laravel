@extends('order')
@section('OrderInformation')
<div>
    @if(!empty($items))
        <ul>
        @foreach($items as $item) 
            <li><p>{{$item->name}} <span> ${{$item->price}} </span> <span>x{{$item->quantity}}<span></p></li>
        @endforeach
        </ul>
    @else
        <p>nothing here</p>
    @endif
</div>
@endsection