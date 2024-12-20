<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Models\Issue;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {
        // Lấy danh sách máy tính và vấn đề liên quan với phân trang
        $computers = Computer::with('issues')
            ->paginate(10); // 10 bản ghi mỗi trang

        return view('computers.index', compact('computers'));
    }
}
