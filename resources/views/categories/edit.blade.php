@extends('layouts.index')

@section('content')

  <div class="row">
    <h1 class="col-12 my-2">Update Product</h1>

    <div class="col-12">
      <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <form class="col-12 my-2" method="post" action="{{ route('categories.update', ['category'=>$category]) }}">

      @csrf

      <input type="hidden" name="_method" value="PUT">

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
      </div>


{{--      <div class="form-group">--}}
{{--        <label for="slug">Slug</label>--}}
{{--        <input type="text" class="form-control" id="slug" name="slug"  value="{{ $products->slug }}">--}}
{{--      </div>--}}

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" >{{ $category->description }}</textarea>
      </div>



      <button type="submit" class="btn btn-primary">Submit</button>

    </form>
  </div>

@endsection
