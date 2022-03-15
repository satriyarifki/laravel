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
        DB::table('post')->insert([
            'title' => 'Lampu Bulan',
            'price' => '45',
            'image' => '',
            'content' => 'Lampu untuk menerangi kegelapan'
        ]);
        DB::table('post')->insert([
            'title' => 'Meja Bundar',
            'price' => '60',
            'image' => '',
            'content' => 'Meja Untuk lampu atau hiasan'
        ]);
        DB::table('post')->insert([
            'title' => 'Kursi kayu',
            'price' => '30',
            'image' => '',
            'content' => 'Untuk duduk agar tidak pegel'
        ]);
        DB::table('post')->insert([
            'title' => 'Meja antik',
            'price' => '90',
            'image' => '',
            'content' => 'Meja dengan laci yang terukir'
        ]);
    }
}
