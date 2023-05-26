@extends('master')
@section('title', 'Drinks')
@section('content')
<div>
    <h1>Drinks</h1>
    @if(!empty($listOfDrinks))
        <ul>
            @foreach($listOfDrinks as $item) 
            <li><a href="/waters/{{$item->id}}">{{$item->name}}</a>
                <form method="POST" action="<?=url('waters')?>" >
                        <input type="hidden" name="product_id" value="{{$item->id}}">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="_token" value="<?=csrf_token()?>">
                        <button type="submit">Add to Cart</button>
                </form>
            </li>
            @endforeach
        </ul>
    @else
    <p>Sorry, we don't have drinks in our storage now. Please, check it tommorow</p>
    @endif
    
</div>
@endsection
