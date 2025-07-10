<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lengkapi Data Karyawan
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-8">
                <form method="POST" action="{{ route('employee.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-400 focus:ring focus:ring-amber-200 focus:ring-opacity-50">
                        @error('name')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="position" class="block text-sm font-medium text-gray-700">Jabatan</label>
                        <input type="text" name="position" id="position" value="{{ old('position') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-400 focus:ring focus:ring-amber-200 focus:ring-opacity-50">
                        @error('position')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="department" class="block text-sm font-medium text-gray-700">Departemen</label>
                        <input type="text" name="department" id="department" value="{{ old('department') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-400 focus:ring focus:ring-amber-200 focus:ring-opacity-50">
                        @error('department')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-6">
                        <label for="employee_id" class="block text-sm font-medium text-gray-700">Employee ID</label>
                        <input type="text" name="employee_id" id="employee_id" value="{{ old('employee_id') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-400 focus:ring focus:ring-amber-200 focus:ring-opacity-50">
                        @error('employee_id')<span class="text-red-600 text-xs">{{ $message }}</span>@enderror
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="px-6 py-2 bg-amber-500 text-white rounded-md font-semibold shadow hover:bg-amber-600 transition">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout> 