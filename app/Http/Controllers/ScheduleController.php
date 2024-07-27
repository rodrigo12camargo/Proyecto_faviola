<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        // Simulación de datos de horarios
        $schedules = [
            ['zone' => 'Centro', 'day' => 'Lunes', 'time' => '8:00 - 10:00'],
            ['zone' => 'Norte', 'day' => 'Martes', 'time' => '9:00 - 11:00'],
            ['zone' => 'Sur', 'day' => 'Miércoles', 'time' => '7:00 - 9:00'],
        ];
        
        return view('schedules.index', compact('schedules'));
    }
}
