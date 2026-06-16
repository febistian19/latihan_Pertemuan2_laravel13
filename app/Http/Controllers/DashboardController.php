<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_tasks' => 0, // nanti diisi dari database
            'selesai' => 0,
            'sedang_proses' => 0,
            'terlambat' => 0,
        ];

        return view('dashboard', compact('stats'));
    }
}
