<nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
        <div class="flex items-center space-x-3">
            <!-- Logo (bisa ganti SVG/logo perusahaan) -->
            <span class="inline-block bg-amber-500 rounded-full w-10 h-10 flex items-center justify-center text-white font-bold text-xl">MPU</span>
            <span class="text-xl font-bold text-amber-700">PT. MENARA PONDASI UTAMA</span>
        </div>
        <div class="flex items-center space-x-6">
            @guest
                <a href="{{ route('login') }}" class="px-5 py-2 bg-amber-500 text-white rounded-md font-semibold shadow hover:bg-amber-600 transition">Login Karyawan</a>
                <a href="{{ route('register') }}" class="px-5 py-2 bg-amber-500 text-white rounded-md font-semibold shadow hover:bg-amber-600 transition">Register</a>
            @endguest
            @auth
                <a href="{{ route('dashboard') }}" class="text-gray-700 font-semibold hover:text-amber-600 transition">Dashboard</a>
                <a href="{{ route('attendance.index') }}" class="text-gray-700 font-semibold hover:text-amber-600 transition">Absensi</a>
                <!-- User Dropdown -->
                <div class="relative group">
                    <button class="flex items-center space-x-2 focus:outline-none">
                        <span class="font-semibold text-gray-700">{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute right-0 mt-2 w-40 bg-white rounded-md shadow-lg py-2 z-20 hidden group-hover:block">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-amber-50">Profil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-amber-50">Logout</button>
                        </form>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</nav>
