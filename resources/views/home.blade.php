@extends('layouts.app')

@section('content')
<div class="container">

     <h1> Products</h1>
     <div class="row">
    @foreach ($allproducts as $products)
    <div class="col-4">
    <div class="card">
        <img class="card-img-top" data-src="holder.js/100x180/?text=Image cap" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">{{$products->name}}</h4>
            <p class="card-text">{{$products->descreption}}</p>
        </div>
        <div class="card-body">
            <a href="{{route('cart.add' , $products->id)}}" class="card-link">Add to card</a>
        </div>
    </div>
</div>
    @endforeach
     
     </div>
</div>
@endsection
