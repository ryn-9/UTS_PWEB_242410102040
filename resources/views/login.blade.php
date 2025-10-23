@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="col-md-4 mx-auto">
  <h3 class="text-center mb-3">Login Sewa Mobil</h3>
  <form method="POST" action="/login">
    @csrf
    <div class="mb-3">
      <label>Username</label>
      <input type="text" name="username" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <button class="bg-red-600 btn btn-primary hover:bg-red-900 w-100">Masuk</button>
  </form>
</div>
@endsection
