<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller{
    public function about(){
        return 'Tampilkan NIM dan Nama <br> NIM : 2241720041 <br> 
        Nama : Brilliantna Salsabila Arifin' ;
    }
}