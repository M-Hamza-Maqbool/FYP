@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Your Cart</h2>
        <table class="table table-striped ">
            <thead class="thead-inverse">
                <tr>
                    <th>Name of product </th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>

                </tr>
                </thead>
                @foreach ($cartitems as $item)
                <tbody>
                    <tr>
                        <td scope="row">{{$item->name}}</td>
                        <td>{{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</td>
                        <td>
                         <form action="{{route('cart.update',$item->id)}}">
                         <input type="text" name ="quantity" value="{{$item->quantity}}">  
                         <input type="submit" value="save">   
 
                        </form>
                        </td>
                        <td>
                            <a href="{{route('cart.destroy', $item->id)}}" class="btn btn-dark">Delete </a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
        </table>
        <h3>
         Total Price: ${{\Cart::session(auth()->id())->getTotal()}}

        </h3>
        <br>
        <a name="" id="" class="btn btn-primary" href="{{route('cart.checkout')}}" role="button"> CheckOut</a>
</div>
@endsection