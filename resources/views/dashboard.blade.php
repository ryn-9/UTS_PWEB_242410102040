@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

  <div class="w-full">
    <img src="{{ asset('images/cover.png') }}" alt="cover sido maju" class="w-full">
  </div>
  {{-- <h1 class="px-3 text-3xl font-bold mb-4">Dashboard</h1> --}}

  @if($username)
    <h1 class="text-3xl font-bold mb-6">
      Selamat Datang, <span class="font-semibold text-red-600">{{ $username }}</span>!
    </h1>
  @endif

  <h2 class="text-2xl font-semibold mb-4">Mobil Tersedia:</h2>

  <div class="flex justify-center">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($mobils as $mobil)
        @if($mobil['status'] === 'Tersedia')
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transform transition duration-300">
            <img src="{{ $mobil['img'] }}" alt="{{ $mobil['nama'] }}" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">{{ $mobil['nama'] }}</h3>
                <p class="text-gray-600 mt-2">Rp {{ number_format($mobil['harga'], 0, ',', '.') }}/hari</p>
                <button class="mt-3 bg-red-600 text-white w-full py-2 rounded hover:bg-red-700 transition">
                Sewa Sekarang
                </button>
            </div>
            </div>
        @endif
        @endforeach
    </div>
    </div>
@endsection
