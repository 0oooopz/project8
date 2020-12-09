<?php
/* @var \App\Models\Product $product*/
?>

@extends('layouts.index')

@section('content')

  <div class="row">
    <h1 class="col-12 my-2">Update Product</h1>

    <div class="col-12">
      <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <form class="col-12 my-2" method="post" action="{{ route('products.update', ['product'=>$product]) }}">

      @csrf

      <input type="hidden" name="_method" value="PUT">

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
      </div>

      <div class="form-group">
        <label for="sku">Sku</label>
        <input type="number" class="form-control" id="sku" name="sku"  value="{{ $product->sku }}">
      </div>

{{--      <div class="form-group">--}}
{{--        <label for="slug">Slug</label>--}}
{{--        <input type="text" class="form-control" id="slug" name="slug"  value="{{ $products->slug }}">--}}
{{--      </div>--}}

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" >{{ $product->description }}</textarea>
      </div>

      <div class="form-group">
        <label for="price_user">Price user</label>
        <input type="number" class="form-control" id="price_user" name="price_user" value="{{ $product->price_user }}">
      </div>

      <div class="form-group">
        <label for="price_3_opt">Price 3 opt</label>
        <input type="number" class="form-control" id="price_3_opt" name="price_3_opt" value="{{ $product->price_3_opt }}">
      </div>

      <div class="form-group">
        <label for="price_8_opt">Price 8 opt</label>
        <input type="number" class="form-control" id="price_8_opt" name="price_8_opt" value="{{ $product->price_8_opt }}">
      </div>

      <div class="form-group">
        <label for="price_dealer">Price dealer</label>
        <input type="number" class="form-control" id="price_dealer" name="price_dealer" value="{{ $product->price_dealer }}">
      </div>

      <div class="form-group">
        <label for="price_vip">Price VIP</label>
        <input type="number" class="form-control" id="price_vip" name="price_vip" value="{{ $product->price_vip }}">
      </div>

      <div class="form-group">
        <label for="category_id">Category ID</label>
        <input type="number" class="form-control" id="category_id" name="category_id" value="{{ $product->category_id }}">
      </div>

      <div class="form-group">
        <label for="stock">stock</label>
        <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>

    </form>
  </div>

@endsection
