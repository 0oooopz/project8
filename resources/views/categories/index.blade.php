<?php
/* @var \App\Models\Category[] $categories*/
?>

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
            <div class="d-flex justify-content-end">
              <a href="{{ route('categories.show',['category' => $category->id]) }}" class="btn btn-primary mr-2">Show more...</a>
              <a href="{{ route('categories.edit', ['category'=>$category->id]) }}" class="btn btn-warning mr-2">Edit</a>
              <form action="{{ route('categories.destroy',['category'=>$category->id]) }}" method="post">
                <input type="hidden" name="_method" value="delete">
                @csrf
                <button class="btn btn-danger">Delete</button>
              </form>
            </div>
            </p>
          </div>
        </div>
      </div>
    @endforeach

  </div>

@endsection