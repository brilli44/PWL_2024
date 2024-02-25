<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Halaman;
class PageController extends Controller{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Tampilkan NIM dan Nama <br> NIM : 2241720041 <br> 
        Nama : Brilliantna Salsabila Arifin' ;
    }
    public function Articles($id){
        return 'Halaman Artikel dengan ID '.$id;
    }
    
}
