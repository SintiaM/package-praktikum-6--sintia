<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu_makanan_minuman(){
        $pesanan= "Menu Makanan & Minuman Yang Di pilih";
        $pilih = array('Makanan Nasi & Ayam Goreng  Minuman Jeruk Panas', 'Makanan Nasi & Ikan Lele Bakar Minuman Teh Panas');
        return view('menumakanan', ['pesanan' => $pesanan, 'pilih' =>$pilih]);
    }
}
