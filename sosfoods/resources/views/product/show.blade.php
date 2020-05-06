@extends('product.layouts')

@section('content')
{{-- ici lentête du menu  --}}

<div class="hero-wrap hero-bread" style="background-image: url('/images/bg_1.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="#">Accueil</a></span> <span class="mr-2"><a href="index.html"></a></span> <span>{{$products->title}}</span></p>
          <h1 class="mb-0 bread">Product {{$products->title}}</h1>
        </div>
      </div>
    </div>
  </div>
{{-- fin de lentête du menu  --}}


{{-- affichage du produit ainsi que les proprieté du produit  --}}
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="images/product-1.jpg" class="image-popup"><img src="images/product-1.jpg" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
            <h3>{{$products->title}}</h3>
                
                <p class="price"><span>{{$products->price}}</span></p>
                    <p>
                        {{$products->description}}
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                  <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="" id="" class="form-control">
                      <option value="">Small</option>
                    <option value="">Medium</option>
                    <option value="">Large</option>
                    <option value="">Extra Large</option>
                  </select>
                </div>
                </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
                 <span class="input-group-btn mr-2">
                    <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                   <i class="ion-ios-remove"></i>
                    </button>
                    </span>
                 <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                 <span class="input-group-btn ml-2">
                    <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                     <i class="ion-ios-add"></i>
                 </button>
                 </span>
              </div>
              <div class="w-100"></div>
              <div class="col-md-12">
                  <p style="color: #000;">600 kg available</p>
              </div>
          </div>
        <form action="{{route('cart.store')}}" method="post">
                    @csrf
        <input type="hidden" name="id" value="{{$products->id}}">
        
                    <p><button class="btn btn-dark" type="submit"  >Ajouté au Panier</button></p>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- fin de l'affichage du produit et ces propriété  --}}

{{-- les produit avec la même categorie --}}

{{-- fin des produit avec les même categorie --}}
@endsection