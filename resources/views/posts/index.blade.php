@extends('layouts.index')

@section('content')

  <div class="row">

    <div class="col-12">
      <a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a>
    </div>

    @foreach($posts as $post)
      <div class="col-12 col-sm6 col-md4 col-lg-3 my-2">
        <div class="card">
          <div class="card-header">
            {{ $post->title }}
          </div>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <a href="#" style="color: white"><span class="badge rounded-pill bg-secondary">Secondary</span></a>
            <p class="card-text">
              {{ $post->body }}
            </p>
            <a href="#" class="btn btn-primary">Show more ...</a>
          </div> <!-- /.div class='card-body -->
        </div> <!-- /.div class='card' -->
      </div> <!-- /.div class='col-12 col-sm6 col-md4 col-lg-3 my-2' -->
    @endforeach

  </div> <!-- /.div class='row' -->

@endsection
