@extends('master')
@section('content')
  <div class = 'header'>
    <p>Full Information</p>
  </div>
  <div class = 'product_card_wrapper'>
    <div class = 'product_card'>
        <div class = 'product_card_left'>
            <img src="/{{$product->image}}">
        </div>

        <div class = 'product_card_right'>
            <p class = 'product_category_name'>{{$product->getCategory()->name}}</p>
            <span class = 'product_product_name'>{{$product->name}}</span>
            <p class = 'product_description'>Product Description:</p>
            <p class = 'product_description_text'>{{$product->description}}</p>
            <p class = 'product_price'>{{$product->price}}$</p>
            <form action="{{route('cart-add',$product)}}" method="POST">
                @csrf
                <button type = 'submit'>ADD TO CART</button>
            </form>
        </div>
      </div>    
    </div>
@endsection

