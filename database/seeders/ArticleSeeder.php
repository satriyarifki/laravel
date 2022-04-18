<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matkul = [
            [   'tittle' => 'Aloha',
                'content' => 3,
                '' => 6,
                'semester' => 4,
            ],
            [   'nama_matkul' => 'Pemrograman Web Lanjut',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4,
            ],
        ];
        DB::table('matakuliah')->insert($matkul);
    }
}
