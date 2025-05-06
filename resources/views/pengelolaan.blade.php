@extends('layouts.app')

@section('title', 'Daftar Reservasi - Mizu')

@section('content')
<div class="p-8 bg-pink-50 min-h-screen">
    <h1 class="text-3xl font-bold text-pink-700 mb-6">Daftar Reservasi</h1>

    @if(count($reservasi) > 0)
        <div class="grid gap-4" id="list-reservasi">
            @foreach($reservasi as $key => $r)
            <div class="bg-white shadow-md rounded p-4 border-l-4 border-pink-400 relative transition-opacity" id="reservasi-{{ $key }}">
                <p><strong>Nama Pemesan:</strong> {{ $r['nama_pemesan'] }}</p>
                <p><strong>Jumlah Orang:</strong> {{ $r['jumlah_orang'] }}</p>
                <p><strong>Durasi:</strong> {{ $r['durasi'] }} jam</p>
                <p><strong>Waktu:</strong> {{ \Carbon\Carbon::parse($r['waktu'])->format('d M Y, H:i') }}</p>
                <div class="mt-3 flex gap-2">
                    <button onclick="selesai({{ $key }})" class="bg-green-500 text-white px-3 py-1 rounded">Selesai</button>
                    <a href="{{ route('hapusReservasi', ['index' => $key]) }}"
                        class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600"
                        onclick="return confirm('Yakin ingin menghapus reservasi ini?')">
                        Hapus
                     </a>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-600">Belum ada reservasi yang dilakukan.</p>
    @endif
</div>

<script>
    function selesai(id) {
        const card = document.getElementById('reservasi-' + id);
        card.classList.add('opacity-50');
    }

    function hapus(id) {
        const card = document.getElementById('reservasi-' + id);
        card.remove();
    }
</script>
@endsection
