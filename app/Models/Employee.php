<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'position',
        'department',
        'employee_id',
        'user_id',
    ];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function getTodayAttendance()
    {
        return $this->attendances()
            ->whereDate('date', today())
            ->first();
    }

    public function getMonthlyAttendance($year, $month)
    {
        return $this->attendances()
            ->whereYear('date', $year)
            ->whereMonth('date', $month)
            ->get();
    }
}