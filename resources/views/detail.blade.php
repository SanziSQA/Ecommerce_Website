@extends('master')
@section("content")
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img class="detail-img" src="{{$product['gallery']}}">


  </div> 
  <div class="col-sm-6">
    <a href="/">Go Back</a>
    <h2>{{$product['name']}}</h2>
    <h3>Price : {{$product['price']}}</h3>
    <h4>Details : {{$product['description']}}</h4>
    <h4>Category : {{$product['category']}}</h4>
    <br><br>
    <form action="/add_to_cart" method="POST">
      @csrf
      <input type="hidden" name="product_id" value="{{$product['id']}}">
      <button class="btn btn-primary">Add To Card</button>
    </form>
    <br><br>
    


  </div> 
    
  </div>
 
  </div>
  
@endsection