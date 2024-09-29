<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfGeneratorController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $pdf = PDF::loadView('pdf_template', compact('user'));
        return $pdf->download('resume_' . $id . '.pdf'); // Генерация PDF
    }
}
