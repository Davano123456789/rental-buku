<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PakarController extends Controller
{
    public function index() {
        return view('pakar');
        
    }
    public function add(Request $request) {
        // Mendapatkan data dari formulir
        $selectedSymptoms = $request->only(['G1', 'G2', 'G3', 'G4', 'G5', 'G6', 'G8', 'G9']);
    
        // Variabel untuk menyimpan diagnosis
        $disease = null;
    
        // Menentukan penyakit berdasarkan kombinasi gejala yang dipilih
        if (isset($selectedSymptoms['G1']) && isset($selectedSymptoms['G2']) &&
            isset($selectedSymptoms['G4']) && isset($selectedSymptoms['G5']) &&
            isset($selectedSymptoms['G6']) && isset($selectedSymptoms['G8']) &&
            isset($selectedSymptoms['G9'])) {
            // Jika G1, G2, G4, G5, G6, G8, dan G9 dipilih, maka diagnosa kerusakan tipe A
            $disease = 'Kerusakan Tipe A';
        } else if(isset($selectedSymptoms['G1']) && isset($selectedSymptoms['G2']) &&
        isset($selectedSymptoms['G3']) && isset($selectedSymptoms['G6']) &&
        isset($selectedSymptoms['G7']) && isset($selectedSymptoms['G8'])){
            $disease = 'Kerusakan Tipe B';

        } else{
            $disease = 'Tidak ditemukan diagnosanya';
        }
    
        // Mengirimkan data penyakit ke tampilan
        return view('pakar-view', ['disease' => $disease]);
    }
    
    
    
}
