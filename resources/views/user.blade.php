@extends('master')

@section('title', 'User-s registration')

@section('content')
<div>
    <h1>User's registration</h1>
    
    <form method="POST" action="<?=url('user')?>">
        <label>Name:<input type="text" name="name"></label><br>
        <label>Phone number:<input type="text" name="phone"></label><br>
        <input type="hidden" name="_token" value="<?=csrf_token()?>">
        <input type="submit" value="Send">
    </form>
</div>
@endsection
