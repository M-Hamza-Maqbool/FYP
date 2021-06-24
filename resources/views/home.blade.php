@extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
     <h1> Products</h1>
<hr/>
     <div class="row">
    @foreach ($allproducts as $products)
    <div class="col-4">
    <div class="card">
        <img class="card-img-top" src="https://www.flexicon.com/Materials-Handled/images/Fly-Ash_LG.png" data-src="" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">{{$products->name}}</h4>
            <p class="card-text">{{$products->descreption}}</p>
            <p class="card-text">{{$products->price}}</p>

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
