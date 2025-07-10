<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Data Pegawai</h3>
                    @if(!isset($employees))
                        <div class="text-red-600">Data pegawai tidak ditemukan. Cek pengiriman variabel dari route.</div>
                    @else
                        <div class="mb-2 text-xs text-gray-500">Jumlah pegawai: {{ $employees->count() }}</div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-amber-100">
                                    <tr>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Nama</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Email</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Jabatan</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Departemen</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 uppercase">Employee ID</th>
                                        <th class="px-4 py-2"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse($employees as $employee)
                                        <tr>
                                            <td class="px-4 py-2">{{ $employee->name }}</td>
                                            <td class="px-4 py-2">{{ $employee->email }}</td>
                                            <td class="px-4 py-2">{{ $employee->position }}</td>
                                            <td class="px-4 py-2">{{ $employee->department }}</td>
                                            <td class="px-4 py-2">{{ $employee->employee_id }}</td>
                                            <td class="px-4 py-2">
                                                <a href="{{ route('employees.edit', $employee->id) }}" class="inline-block px-3 py-1 bg-amber-500 text-white rounded hover:bg-amber-600 text-xs font-semibold">Edit</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="px-4 py-2 text-center text-gray-500">Belum ada data pegawai.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
