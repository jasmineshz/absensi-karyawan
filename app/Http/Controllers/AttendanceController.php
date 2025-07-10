<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AttendanceController extends Controller
{
    public function create()
    {
        return view('attendance.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'check_in' => 'required|date_format:H:i',
            'check_out' => 'required|date_format:H:i|after:check_in',
            'photo_in' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'photo_out' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $photoInPath = $request->file('photo_in')->store('attendance_photos', 'public');
        $photoOutPath = $request->file('photo_out')->store('attendance_photos', 'public');

        Attendance::create([
            'user_id' => Auth::id(),
            'date' => now()->toDateString(),
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'photo_in' => $photoInPath,
            'photo_out' => $photoOutPath,
        ]);

        return redirect()->route('attendance.index')->with('success', 'Absensi berhasil disimpan!');
    }

    public function index()
    {
        $attendances = \App\Models\Attendance::where('user_id', \Auth::id())
            ->orderByDesc('date')
            ->paginate(10);

        return view('attendance.index', compact('attendances'));
    }
}