@extends('product.layouts')

@section('content')
{{-- entête cart css --}}
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
          <h1 class="mb-0 bread">My Cart</h1>
        </div>
      </div>
    </div>
  </div>
{{-- fin entête cart css --}}
@if(Cart::count()>0)
{{-- debut les produit du panier  --}}
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
        <div class="col-md-12 ftco-animate">
            <div class="cart-list">
                <table class="table">
                    <thead class="thead-primary">
                      <tr class="text-center">
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>

                        {{-- tableau contenant les produot du panier --}}
                        @foreach (Cart::content() as $product)
                            
                    
                            <tr class="text-center">
                                <td class="product-remove">
                                <form action="{{route('cart.destroy',$product->rowId)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" ><span class="ion-ios-close"></span></button>
                                </form>
                                </td>
                                
                                <td class="image-prod"><div class="img" style="background-image:url(images/product-3.jpg);"></div></td>
                                
                                <td class="product-name">
                                <h3>{{$product->model->title}}</h3>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                </td>
                                
                                <td class="price">{{$product->model->getPrice()}}</td>
                                
                                <td class="quantity">
                                    <div class="input-group mb-3">
                                    <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                                </div>
                            </td>
                                
                                <td class="total">$4.90</td>
                            </tr><!-- END TR-->
                      @endforeach
                      {{-- fin tableau contenant les produit du panier --}}
                    </tbody>
                  </table>
              </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h3>Coupon Code</h3>
                <p>Enter your coupon code if you have one</p>
                  <form action="#" class="info">
          <div class="form-group">
              <label for="">Coupon code</label>
            <input type="text" class="form-control text-left px-3" placeholder="">
          </div>
        </form>
            </div>
            <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
        </div>
        <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h3>Estimate shipping and tax</h3>
                <p>Enter your destination to get a shipping estimate</p>
                  <form action="#" class="info">
          <div class="form-group">
              <label for="">Country</label>
            <input type="text" class="form-control text-left px-3" placeholder="">
          </div>
          <div class="form-group">
              <label for="country">State/Province</label>
            <input type="text" class="form-control text-left px-3" placeholder="">
          </div>
          <div class="form-group">
              <label for="country">Zip/Postal Code</label>
            <input type="text" class="form-control text-left px-3" placeholder="">
          </div>
        </form>
            </div>
            <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
        </div>
        <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h3>Total du panier</h3>
                <p class="d-flex">
                    <span>Sous-Total</span>
                <span>{{getPrice(Cart::subtotal())}}</span>
                </p>
                <p class="d-flex">
                    <span>Tax</span>
                <span>{{getPrice(Cart::tax())}}</span>
                </p>
                <p class="d-flex">
                    <span>Discount</span>
                    <span>$3.00</span>
                </p>
                <hr>
                <p class="d-flex total-price">
                    <span>Total</span>
                    <span>{{getPrice(Cart::total())}}</span>
                </p>
            </div>
        <p><a href="{{route('checkout.index')}}" class="btn btn-primary py-3 px-4">Passer a la caisse </a></p>
        </div>
    </div>
    </div>
</section>
  @else
  <div class="col-md-12">
    <h1 class="text-center">Votre panier est vide</h1>

  </div>
@endif
{{-- fin les produit du panier  --}}
@endsection