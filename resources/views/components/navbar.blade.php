<nav class="bg-pink-100 text-pink-800 px-4 py-3 shadow">
    <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center">
        <div class="flex flex-wrap space-x-4 mb-2 md:mb-0">
            <a href="{{ route('dashboard', ['username' => session('username')]) }}" class="hover:underline">Home</a>
            <a href="{{ route('pengelolaan', ['username' => session('username')]) }}" class="hover:underline">Pengelolaan</a>
            <a href="{{ route('profil') }}" class="hover:underline">Profil</a>
            <a href="{{ route('logout') }}" class="hover:underline">Logout</a>
        </div>
        <div class="text-xl font-bold text-pink-700">Mizu</div>
    </div>
</nav>
