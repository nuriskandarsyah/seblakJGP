<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{
    public function karikop()
    {
        $data = [
            'name' => 'Karikop ',
            'profession' => 'kerang putih | kerang simping | kerang dara | kerang ijo | kerang tahu | kepiting | udang | cumi',
            'about' => ' ',
            'skills' => [
            ],
            'produkumi' => 'Kerupuk Rengginang Umi menawarkan dua kategori utama produk olahan. Untuk kerupuk ikan, tersedia varian rasa dari ikan barakuda, tongkol, dan tenggiri yang gurih dan renyah. Sementara untuk rengginang, diolah dari beras ketan pilihan yang dipadukan dengan ikan segar, menghasilkan cita rasa unik yang khas dan lezat.',
            'contact' => [
                'email' => 'nuriskandarsyah010@gmail.com',
                'phone' => '085157826617',
                'address' => 'Dusun Duwet III, Desa Banjarharjo, Kec. Banjarharjo, Kab. Kulonprogo, D.I Yogyakarta'
            ]
        ];

        return view('cv.karikop', compact('data'));
    }
    
    public function ProdukUmi()
    {
        $data = [
            'name' => 'Produk Umi',
            'profession' => 'Rengginang | Kerupuk',
            'about' => ' ',
            'skills' => [
            ],
        ];

        return view('cv.ProdukUmi', compact('data'));
    }
    
    public function IstyPJ()
    {
        $data = [
            'name' => 'Isty_Poenya Jamu',
            'profession' => 'Jamu',
            'about' => ' ',
            'skills' => [
            ],
        ];

        return view('cv.IstyPJ', compact('data'));
    }
}
