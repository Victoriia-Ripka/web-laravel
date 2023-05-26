@extends('master')
@section('title', 'Drinks')
@section('content')
<div>
    @if(!empty($item))
        <h1>{{$item->name}}</h1>
        <p>{{$item->info}}</p>
        <p>price: ${{$item->price}}</p>
        <form method="POST" action="<?=url("$item->type")?>">
            <input type="hidden" value="100" name="price">
            <input type="hidden" value="1" name="productid">
            <button type="submit" name="buy" >Buy</button>
        </form> 
    @else
    <p>Sorry, we don't have such item in our storage now.</p>
    @endif
</div>
@endsection
