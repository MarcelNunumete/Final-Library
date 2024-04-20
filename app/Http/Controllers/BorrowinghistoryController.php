<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Borrowing;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BorrowinghistoryController extends Controller
{
    public function index()
    {
        $borrowing = Borrowing::all();
        return view('borrowing', [
            'borrowing' => $borrowing
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $borrowing = Borrow::findOrfail($id);
        $borrowing->status = $request->status;
        $borrowing->save();

        return redirect()->back();
    }

    public function generatePDF()
    {
        $borrowing = Borrowing::all(); // Ambil semua data peminjaman
        $pdf = Pdf::loadView('laporan', [
            'bookings' => Borrowing::all(),
            'borrowing' => $borrowing
        ]);

        return $pdf->download('laporan_peminjaman.pdf'); // Unduh file PDF dengan nama tertentu
    }

    
}
