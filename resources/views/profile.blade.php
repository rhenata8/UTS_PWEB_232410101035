@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-pink-50 p-4">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-pink-600 mb-4">Profil Pengguna</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('updateProfil') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Username:</label>
                <input type="text" name="username" value="{{ $username }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-pink-300" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Password:</label>
                <input type="text" name="password" value="{{ $password }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-pink-300" required>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
