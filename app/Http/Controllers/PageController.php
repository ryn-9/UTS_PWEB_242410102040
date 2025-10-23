<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $request->session()->put('username', $username);

        return redirect()->route('dashboard');
    }

    public function dashboard(Request $request)
    {
        $username = $request->session()->get('username');

        $mobils = [
            ['nama' => 'BMW 320i Sport', 'harga' => 500000, 'status' => 'Disewa', 'img' => 'https://www.bmw.co.id/content/dam/bmw/marketID/bmw_co_id/images/News/2023/bmw_320isport_dp.jpg'],
            ['nama' => 'JEEP Rubicon', 'harga' => 550000, 'status' => 'Tersedia', 'img' => 'https://www.olx.co.id/news/wp-content/uploads/2024/03/rubicon-2-696x464.webp'],
            ['nama' => 'Ferrari 488', 'harga' => 650000, 'status' => 'Tersedia', 'img' => 'https://m.atcdn.co.uk/a/media/%7Bresize%7D/1e283e5c3302472f8ee5eb9e59e51557.jpg'],
            ['nama' => 'Rolls Royce Phantom', 'harga' => 600000, 'status' => 'Tersedia', 'img' => 'https://www.olx.co.id/news/wp-content/uploads/2024/09/rolls-royce-phantom.webp'],
        ];

        return view('dashboard', compact('mobils', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->session()->get('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->session()->get('username');

        $mobils = [
            ['nama' => 'BMW 320i Sport', 'harga' => 500000, 'status' => 'Disewa', 'img' => 'https://www.bmw.co.id/content/dam/bmw/marketID/bmw_co_id/images/News/2023/bmw_320isport_dp.jpg'],
            ['nama' => 'JEEP Rubicon', 'harga' => 550000, 'status' => 'Tersedia', 'img' => 'https://www.olx.co.id/news/wp-content/uploads/2024/03/rubicon-2-696x464.webp'],
            ['nama' => 'Ferrari 488', 'harga' => 650000, 'status' => 'Tersedia', 'img' => 'https://m.atcdn.co.uk/a/media/%7Bresize%7D/1e283e5c3302472f8ee5eb9e59e51557.jpg'],
            ['nama' => 'Rolls Royce Phantom', 'harga' => 600000, 'status' => 'Tersedia', 'img' => 'https://www.olx.co.id/news/wp-content/uploads/2024/09/rolls-royce-phantom.webp'],
        ];

        return view('pengelolaan', compact('mobils', 'username'));
    }

    public function logout(Request $request)
    {
        $request->session()->forget('username');
        return redirect()->route('login');
    }
}
