@extends('layouts.index')

@section('content')

  <div class="col">
    <table class="table">
      <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Role</th>
        <th scope="col">Gender</th>
        <th scope="col">Salary</th>
        <th scope="col">Email</th>
      </tr>
      </thead>
      <tbody>
        @foreach( $users as $user )
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->role}}</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->salary }}</td>
            <td>{{ $user->email }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
