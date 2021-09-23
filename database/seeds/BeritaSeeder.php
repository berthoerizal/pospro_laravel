<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Berita;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 2; $i <= 50; $i++) {
            $berita_judul = 'Berita ' . $i;
            DB::table('beritas')->insert([
                'judul' => $berita_judul,
                'slug_judul' =>  Str::slug($berita_judul),
                'isi' => 'Ini adalah isi dari ' . $berita_judul,
                'gambar' => 'default-image.jpg',
                'id_user' => 2,
                'status' => 'publish'
            ]);
        }
        // $faker = Faker::create('id_ID');
        // for ($i = 1; $i <= 2; $i++) {
        //     // insert data ke table pegawai menggunakan Faker
        //     Berita::insert([
        //         'judul' => $faker->judul,
        //         'slug_judul' =>  Str::slug($faker->slug_judul),
        //         'isi' => $faker->isi,
        //         'gambar' => 'default-image.jpg',
        //         'id_user' => Auth::user()->id,
        //         'status' => 'publish'
        //     ]);
        // }
    }
}
