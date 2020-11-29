    <div  class = 'card-wrapper'>
      <div class = 'card'>
        <div class = 'card-left'>
          <img src = '/{{$product->image}}'>
          <div class = 'card-buttons'>
            <form action="{{route('cart-add',$product)}}" method="POST">
                @csrf
                <button type="submit" role="button">ADD TO CART</button>
                <button><a style  = 'color: inherit;' href ="{{route('product',[$product->getCategory()->code,$product->code])}}">SEE MORE</a></button>     
            </form>
          </div>
        </div>
        <div class = 'card-right'>
          <p class = 'card-category-name'>{{$product->getCategory()->name}}</p>
          <h2>{{$product->name}}</h2>
          <span>{{$product->price}} $</span>
          <p class = 'card-description'>{{$product->description}}</p>
        </div>
      </div>
    </div>