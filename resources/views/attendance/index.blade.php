@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-xl mx-auto bg-white rounded-lg shadow p-8">
        <h1 class="text-2xl font-bold text-amber-700 mb-6 text-center">Formulir Absensi Karyawan</h1>
        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('attendance.store') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div>
                <label for="check_in" class="block text-sm font-medium text-gray-700">Jam Hadir</label>
                <input id="check_in" name="check_in" type="time" required class="mt-1 block w-full rounded-md border-gray-300 focus:border-amber-400 focus:ring focus:ring-amber-200 focus:ring-opacity-50" value="{{ old('check_in') }}">
            </div>
            <div>
                <label for="check_out" class="block text-sm font-medium text-gray-700">Jam Keluar</label>
                <input id="check_out" name="check_out" type="time" required class="mt-1 block w-full rounded-md border-gray-300 focus:border-amber-400 focus:ring focus:ring-amber-200 focus:ring-opacity-50" value="{{ old('check_out') }}">
            </div>
            <div>
                <label for="photo_in" class="block text-sm font-medium text-gray-700">Foto Saat Hadir</label>
                <input id="photo_in" name="photo_in" type="file" accept="image/*" required class="mt-1 block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100" onchange="previewImage(event, 'preview_photo_in')">
                <img id="preview_photo_in" class="mt-2 h-20 rounded hidden" alt="Preview Foto Hadir">
            </div>
            <div>
                <label for="photo_out" class="block text-sm font-medium text-gray-700">Foto Saat Keluar</label>
                <input id="photo_out" name="photo_out" type="file" accept="image/*" required class="mt-1 block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100" onchange="previewImage(event, 'preview_photo_out')">
                <img id="preview_photo_out" class="mt-2 h-20 rounded hidden" alt="Preview Foto Keluar">
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-amber-500 hover:bg-amber-600 text-white font-semibold rounded-md shadow focus:outline-none focus:ring-2 focus:ring-amber-400">Submit Absensi</button>
        </form>
    </div>
</div>
<script>
    function previewImage(event, previewId) {
        const input = event.target;
        const preview = document.getElementById(previewId);
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '';
            preview.classList.add('hidden');
        }
    }
</script>
@endsection