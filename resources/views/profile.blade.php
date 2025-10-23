@extends('layouts.app')

@section('title', 'Profil')

@section('content')
  <h1 class="text-3xl font-bold mb-6">Profile</h1>
    <div class="mb-4">
      <p class="font-semibold">Nama:</p>
      <p>{{ session('username')}}</p>
    </div>
    <div class="mb-4">
      <p class="font-semibold">Email:</p>
      <p>{{ session('username')}}@example.com</p>
    </div>
    <div class="mb-4">
      <p class="font-semibold">Role:</p>
      <p>Admin</p>
    </div>
@endsection
