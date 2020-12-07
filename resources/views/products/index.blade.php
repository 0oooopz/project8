@extends('layouts.index')

@section('content')

  <div class="row">

{{--    <div class="col-12">--}}
{{--      <a href="{{ route('products.create') }}" class="btn btn-success">Create</a>--}}
{{--    </div>--}}

    @foreach($products as $product)
      <div class="col-6 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-tittle">{{ $product->name }}</h5>
            <p class="card-text">
              {{ $product->description }}
            </p>
            <div class="d-flex justify-content-end">
              <a href="{{ route('products.show',['product'=>$product]) }}" class="btn btn-primary mr-2">Show more...</a>
              <a href="{{ route('products.edit', ['product'=>$product]) }}" class="btn btn-warning mr-2">Edit</a>
              <form action="{{ route('products.destroy',['product'=>$product]) }}" method="post">
                <input type="hidden" name="_method" value="delete">
                @csrf
                <button class="btn btn-danger">Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    @endforeach

  </div>

@endsection