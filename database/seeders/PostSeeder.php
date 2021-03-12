<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //---------------------------insert data posts-------------------------------
        // DB::table('posts')->insert([
        //     'title' => 'Belajar Model Dengan Laravel',
        //     'slug' => ' belajar-model-dengan-laravel',
        //     'image' => 'https://via.placeholder.com/640x480.png/00ff77?text=Belajar Model',
        //     'content' => 'Belajar Laravel itu menyenangkan',
        //     'draft' => 0
        //     ]);
        //------------------------------------------------------------------------

        //--------------------------insert data barang----------------------------
        // DB::table('barang')->insert([
        //     'title' => 'Meja Belajar',
        //     'slug' => ' meja-belajar',
        //     'image' => 'https://www.sinarmebel.com/wp-content/uploads/2020/01/Meja-Belajar.jpg',
        //     'content' => 'Meja Belajar',
        //     'draft' => 0
        //     ]);
        //-----------------------------------------------------------------------

        //----------------------insert data pelanggan--------------------------
        // DB::table('pelanggan')->insert([
        //         'nama' => 'Ridho',
        //         'alamat' => 'malang',
        //         'telp' => '085311891925'
        //         ]);
        // DB::table('pelanggan')->insert([
        //         'nama' => 'zulfan',
        //         'alamat' => 'banyuwangi',
        //         'telp' => '081234567890'
        //         ]);
        // //----------------------------------------------------------------------

        //-------------------------------insert data pegawai-------------------------
        // DB::table('pegawai')->insert([
        //         'nama' => 'zulfan',
        //         'alamat' => 'banyuwangi',
        //         'telp' => '081234567890'
        //         ]);
        // DB::table('pegawai')->insert([
        //         'nama' => 'ridho',
        //         'alamat' => 'banyuwangi',
        //         'telp' => '089876543210',
        //         ]);
        //----------------------------------------------------------------------------
               
        //-----------------------------insert data supplier----------------------------
        // DB::table('supplier')->insert([
        //         'nama' => 'ridho',
        //         'alamat' => 'banyuwangi',
        //         'telp' => '089876543210',
        //         ]);
        // DB::table('supplier')->insert([
        //       'nama' => 'zulfan',
        //       'alamat' => 'banyuwangi',
        //       'telp' => '081234567890'
        //        ]);
        //----------------------------------------------------------------------------

    }
}
