<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. MENARA PONDASI UTAMA - Employee Portal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-amber-50 min-h-screen flex flex-col">
    @include('layouts.navigation')
    <main class="flex-1 flex items-center justify-center">
        <div class="container mx-auto px-4 py-16 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-amber-700 mb-4">Selamat Datang di Portal Karyawan</h1>
                <p class="text-lg text-gray-700 mb-6">PT. MENARA PONDASI UTAMA<br>"Membangun Fondasi, Menjulang Prestasi"</p>
                <a href="{{ route('attendance.index') }}" class="inline-block px-8 py-3 bg-amber-500 text-white font-semibold rounded-md shadow hover:bg-amber-600 transition">Masuk ke Sistem Absensi</a>
            </div>
            <div class="flex justify-center md:justify-end">
                <!-- Ilustrasi sederhana (SVG) -->
                <svg width="260" height="200" viewBox="0 0 260 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="120" width="220" height="60" rx="12" fill="#F59E42" fill-opacity="0.2"/>
                    <rect x="60" y="60" width="140" height="80" rx="16" fill="#F59E42" fill-opacity="0.4"/>
                    <circle cx="130" cy="80" r="32" fill="#F59E42" />
                    <rect x="110" y="112" width="40" height="28" rx="8" fill="#F59E42" />
                </svg>
            </div>
        </div>
    </main>
    <footer class="bg-white border-t mt-8">
        <div class="container mx-auto px-4 py-4 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} PT. MENARA PONDASI UTAMA. All rights reserved.
        </div>
    </footer>
</body>
</html>
