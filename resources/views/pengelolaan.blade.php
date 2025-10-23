@extends('layouts.app')

@section('title', 'Data Mobil')

@section('content')
  <h1 class="text-3xl font-bold mb-4">Data Mobil</h1>

  {{-- Tampilkan username di atas tabel --}}
  @if($username)
    <p class="mb-4 text-lg">
      Halo, <span class="font-semibold text-red-600">{{ $username }}</span>!!
    </p>
  @endif

  <table class="min-w-full bg-white border border-gray-300 rounded-lg overflow-hidden">
    <thead class="bg-gray-200 text-gray-700">
      <tr>
        <th class="px-4 py-2 border">No</th>
        <th class="px-4 py-2 border">Foto</th>
        <th class="px-4 py-2 border">Nama Mobil</th>
        <th class="px-4 py-2 border">Harga Sewa</th>
        <th class="px-4 py-2 border">Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach($mobils as $index => $mobil)
          <tr class="border-t hover:bg-gray-50">
            <td class="px-4 py-2 text-center">{{ $index + 1 }}</td>
            <td class="px-4 py-2 text-center">
              <img src="{{ $mobil['img'] }}" alt="{{ $mobil['nama'] }}" class="w-24 h-16 object-cover rounded">
            </td>
            <td class="px-4 py-2">{{ $mobil['nama'] }}</td>
            <td class="px-4 py-2">Rp {{ number_format($mobil['harga'], 0, ',', '.') }}</td>
            <td class="px-4 py-2">
              @if($mobil['status'] === 'Tersedia')
                <span class="text-green-600 font-semibold">{{ $mobil['status'] }}</span>
              @else
                <span class="text-yellow-600 font-semibold">{{ $mobil['status'] }}</span>
              @endif
            </td>
          </tr>
        @endforeach
      </tbody>
  </table>
@endsection
