<?php
/* @var \App\Models\Category $category*/
?>

@extends('layouts.index')

@section('content')
  <div class="row">

    <div class="col-12">
      <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <dl class="col-12 my-2">
      <dt class="col-sm-3">Name</dt>
      <dd class="col-sm-9">{{ $category->name }}</dd>
    </dl>

    <dl class="col-12 my-2">
      <dt class="col-sm-3">Description</dt>
      <dd class="col-sm-9">{{ $category->description }}</dd>
    </dl>



  </div>
@endsection
