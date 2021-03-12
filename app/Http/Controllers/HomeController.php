<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function index()
    // {
    //     return view('home');
    // }

//------------------------PRAKTIKUM 1-------------------------
    // public function home(){
    //     return view('home');
    // }

    // public function product(){
    //     return view('product');
    // }

    // public function news($param){
    //     return $param.view('news');
    // }

    // public function program(){
    //     return view('program');
    // }

    // public function aboutUs(){
    //     return view('aboutUs');
    // }

    // public function contactUs(){
    //     return view('contactUs');
    // }

//------------------------PRAKTIKUM 2-------------------------
        public function home(){
            return view('index');
        }

        public function about(){
            return view('about');
        }

        public function features(){
            return view('features');
        }

        public function contact(){
            return view('contact');
        }

        public function barang(){
            return view('daftarBarang');
        }

        public function pelanggan(){
            return view('daftarPelanggan');
        }

        public function pegawai(){
            return view('daftarPegawai');
        }

        public function supplier(){
            return view('daftarSupplier');
        }

}
