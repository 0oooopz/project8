@extends('layouts.index')

@section('content')
  <div class="col">

    <dl class="row">
      <dt class="col-sm-3">Name</dt>
      <dd class="col-sm-9">{{ $user->name }}</dd>
    </dl>

  </div>
@endsection