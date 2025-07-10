<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'position' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'employee_id' => 'nullable|string|max:255',
        ]);
        $employee->update($validated);
        return redirect()->route('dashboard')->with('success', 'Data pegawai berhasil diperbarui.');
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'employee_id' => 'required|string|max:255|unique:employees,employee_id',
        ]);
        $validated['email'] = auth()->user()->email;
        $validated['user_id'] = auth()->id();
        \App\Models\Employee::create($validated);
        return redirect()->route('dashboard')->with('success', 'Data karyawan berhasil disimpan.');
    }
} 