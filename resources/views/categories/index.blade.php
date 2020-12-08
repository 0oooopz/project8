@extends('layouts.index')

@section('content')

  <div class="row">

    <div class="col-12">
      <a href="{{ route('categories.create') }}" class="btn btn-success">Create Category</a>
    </div>

    @foreach($categories as $category)
      <div class="col-6 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-tittle">{{ $category->name }}</h5>
            <p class="card-text">
              {{ $category->description }}
            </p>
          </div>
        </div>
      </div>
    @endforeach

  </div>

@endsection