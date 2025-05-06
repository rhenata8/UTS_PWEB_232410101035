@extends('layouts.app')

@section('title', 'Dashboard - Mizu')

@section('content')
<div class="p-8 bg-pink-50 min-h-screen">
    <h1 class="text-pink-800 text-lg">Selamat datang, <span class="font-semibold">{{ $username }}</span>!</h1>

    <div class="mt-6">
        <form method="POST" action="{{ route('submitReservasi') }}?username={{ $username }}" class="mt-6 bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label class="block font-medium text-pink-800">Untuk berapa orang?</label>
                <input type="number" name="jumlah_orang" required class="w-full border-pink-300 rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block font-medium text-pink-800">Nama Pemesan</label>
                <input type="text" name="nama_pemesan" required class="w-full border-pink-300 rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block font-medium text-pink-800">Berapa lama reservasi (jam)?</label>
                <input type="number" name="durasi" required class="w-full border-pink-300 rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="block font-medium text-pink-800">Waktu Reservasi</label>
                <input type="datetime-local" name="waktu" required class="w-full border-pink-300 rounded px-3 py-2">
            </div>
            <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded">Kirim Reservasi</button>
        </form>

    </div>
</div>
@endsection



