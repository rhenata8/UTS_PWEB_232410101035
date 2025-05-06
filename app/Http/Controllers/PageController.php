<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing()
    {
        return view('landing');
    }

    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
{
    $username = $request->input('username');
    $password = $request->input('password');

    session([
        'username' => $username,
        'password' => $password,
    ]);

    return redirect()->route('dashboard', ['username' => $username]);
}


    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Tamu');
        return view('dashboard', compact('username'));
    }


    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');

        $dataDariSession = session('reservasi', []);
        $reservasi = [];
        foreach ($dataDariSession as $item) {
            $reservasi[] = $item;
        }

        return view('pengelolaan', compact('username', 'reservasi'));
    }



    public function submitReservasi(Request $request)
    {
        $reservasiBaru = [
            'jumlah_orang' => $request->jumlah_orang,
            'nama_pemesan' => $request->nama_pemesan,
            'durasi' => $request->durasi,
            'waktu' => $request->waktu,
        ];

        $reservasi = session('reservasi', []);
        $reservasi[] = $reservasiBaru;
        session(['reservasi' => $reservasi]);

        return redirect()->route('pengelolaan', ['username' => $request->query('username')]);

    }

    public function hapusReservasi($index)
    {
        $reservasi = session('reservasi', []);

        if (isset($reservasi[$index])) {
            unset($reservasi[$index]);
        }

        session(['reservasi' => array_values($reservasi)]);
        return redirect()->route('pengelolaan', ['username' => session('username')]);
    }



    public function profil(Request $request)
    {
        $username = session('username');
        $password = session('password');
        return view('profile', compact('username', 'password'));
    }

    public function updateProfil(Request $request)
    {
        session([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);

        return redirect()->route('profil')->with('success', 'Profil berhasil diperbarui!');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('landing');
    }
}
