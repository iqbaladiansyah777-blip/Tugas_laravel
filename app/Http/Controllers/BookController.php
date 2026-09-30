<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() { 
        return "Menampilkan semua book"; 
    }
    public function create() { 
        return "Menampilkan form tambah book"; 
    }
    public function store(Request $request) { 
        return "Menyimpan book baru"; 
    }
    public function show(string $id) { 
        return "Menampilkan book tertentu dengan ID: " . $id; 
    }
    public function edit(string $id) { 
        return "Menampilkan form edit book dengan ID: " . $id; 
    }
    public function update(Request $request, string $id) { 
        return "Mengupdate book tertentu dengan ID: " . $id; 
    }
    public function destroy(string $id) { 
        return "Menghapus book tertentu dengan ID: " . $id; 
    }
}