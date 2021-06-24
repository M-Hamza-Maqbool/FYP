@extends('layouts.app')
@section('content')
<div class="container">
<form  action="{{route('shop_mak.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name of Shop</label>
      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Shop Name">
      <small id="emailHelp" class="form-text text-muted">It should be Creative</small>
    </div>

    <div class="form-group">
      <label for="">Description</label>
      <textarea rows="6" class="form-control" name="description"  placeholder="Description " ></textarea>
    </div>
   
    <button type="submit" class="btn btn-primary">Request for Shop</button>

  </form>
</div>
@endsection