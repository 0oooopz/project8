@extends('layouts.index')

@section('content')

  <div class="row">
    <h1 class="col-12 my-2">Create Product</h1>

    <div class="col-12">
      <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <form class="col-12 my-2" method="post" action="{{ route('products.store') }}">

      @csrf

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>

      <div class="form-group">
        <label for="sku">Sku</label>
        <input type="number" class="form-control" id="sku" name="sku">
      </div>

{{--      <div class="form-group">--}}
{{--        <label for="slug">Slug</label>--}}
{{--        <input type="text" class="form-control" id="slug" name="slug">--}}
{{--      </div>--}}

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description"></textarea>
      </div>

      <div class="form-group">
        <label for="price_user">Price user</label>
        <input type="number" class="form-control" id="price_user" name="price_user">
      </div>

      <div class="form-group">
        <label for="price_3_opt">Price 3 opt</label>
        <input type="number" class="form-control" id="price_3_opt" name="price_3_opt">
      </div>

      <div class="form-group">
        <label for="price_8_opt">Price 8 opt</label>
        <input type="number" class="form-control" id="price_8_opt" name="price_8_opt">
      </div>

      <div class="form-group">
        <label for="price_dealer">Price dealer</label>
        <input type="number" class="form-control" id="price_dealer" name="price_dealer">
      </div>

      <div class="form-group">
        <label for="price_vip">Price VIP</label>
        <input type="number" class="form-control" id="price_vip" name="price_vip">
      </div>

      <div class="form-group">
        <label for="category_id">Category ID</label>
        <input type="number" class="form-control" id="category_id" name="category_id">
      </div>

      <div class="form-group">
        <label for="stock">stock</label>
        <input type="number" class="form-control" id="stock" name="stock">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>

    </form>
  </div>

@endsection
