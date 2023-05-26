@extends('master')
@section('title', 'Pizza')
@section('content')
<div>
    <h1>Pizzas</h1>
    @if(!empty($listOPizzas))
        <ul>
            @foreach($listOPizzas as $item) 
            <li><a href="/pizza/{{$item->id}}">{{$item->name}}</a>

            <form method="POST" action="<?=url('pizza')?>" >
                <input type="hidden" name="product_id" value="{{$item->id}}">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="_token" value="<?=csrf_token()?>">
                <button type="submit">Add to Cart</button>
            </form>
            </li>
            @endforeach
        </ul>
    @else
    <p>Sorry, we don't have pizzas in our storage now. Please, check it tommorow</p>
    @endif
</div>
@endsection
