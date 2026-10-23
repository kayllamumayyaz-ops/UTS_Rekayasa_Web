<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TraditionalMusic;

class TraditionalMusicSeeder extends Seeder
{
    public function run(): void
    {
        TraditionalMusic::truncate(); // Membersihkan data lama agar tidak duplikat

        $musics = [
            [
                'title' => 'Harmoni Angklung Bambu',
                'region' => 'Jawa Barat',
                'instrument' => 'Angklung',
                'artist' => 'Mang Daeng & Ki Sastra',
                'release_year' => 2020,
                'audio_file' => 'angklung.jpeg',
                'description' => 'Harmoni musik bambu tradisional khas Sunda yang dimainkan dengan cara digoyangkan, menghasilkan bunyi bernada pentatonik yang magis.'
            ],
            [
                'title' => 'Irama Tamborin Etnik',
                'region' => 'Sumatera Utara',
                'instrument' => 'Tamborin',
                'artist' => 'Sianipar Group',
                'release_year' => 2019,
                'audio_file' => 'tamborin.jpeg',
                'description' => 'Ketukan ritmis tamborin tradisional yang memadukan unsur perkusi energik dalam perayaan adat masyarakat Batak.'
            ],
            [
                'title' => 'Gema Krin Nusantara',
                'region' => 'Papua',
                'instrument' => 'Krin',
                'artist' => 'Tabi Percussion',
                'release_year' => 2021,
                'audio_file' => 'krin.jpeg',
                'description' => 'Alat musik pukul tradisional dari kayu pilihan yang merepresentasikan keindahan alam dan kebudayaan masyarakat pedalaman Papua.'
            ],
            [
                'title' => 'Dinamika Kendang Djambe',
                'region' => 'Papua / Maluku',
                'instrument' => 'Djambe',
                'artist' => 'Maluku Rhythms',
                'release_year' => 2021,
                'audio_file' => 'djambe.jpeg',
                'description' => 'Pukulan kendang djambe berdinamika tinggi yang menghentak dan sarat akan semangat kebersamaan suku-suku pesisir timur Indonesia.'
            ],
            [
                'title' => 'Senandung Ukulele Klasik',
                'region' => 'Maluku & Nusa Tenggara',
                'instrument' => 'Ukulele',
                'artist' => 'Moluccas String',
                'release_year' => 2022,
                'audio_file' => 'ukulele.jpeg',
                'description' => 'Petikan senar ukulele khas pesisir timur yang mendayu-dayu, biasa mengiringi tarian tradisional selamat datang.'
            ],
            [
                'title' => 'Tabuhan Tabla Klasik',
                'region' => 'Aceh / Pengaruh Pesisir',
                'instrument' => 'Tabla',
                'artist' => 'Rangkang Seni',
                'release_year' => 2017,
                'audio_file' => 'tabla.jpeg',
                'description' => 'Kolaborasi tabuhan tabla tradisional yang kaya akan cengkok ritmik bernuansa Melayu-Timur Tengah.'
            ],
            [
                'title' => 'Denyut Ritmik Bongo',
                'region' => 'Nusantara Pesisir',
                'instrument' => 'Bongo',
                'artist' => 'Nusantara Beat',
                'release_year' => 2023,
                'audio_file' => 'bongo.jpeg',
                'description' => 'Perkusi bongo tradisional berirama dinamis yang memberikan nyawa pada setiap pertunjukan seni musik kolaborasi.'
            ],

            [
                'title' => 'Getaran Senar Sasando',
                'region' => 'Nusa Tenggara Timur',
                'instrument' => 'Sasando',
                'artist' => 'Eduardus Bulu',
                'release_year' => 2018,
                'audio_file' => 'sasando.jpeg', 
                'description' => 'Musik petik tradisional unik berdaun lontar asal pulau Rote yang menghasilkan melodi lembut menyerupai suara harpa.'
            ],
            [
                'title' => 'Agung Gamelan Jawa',
                'region' => 'Jawa Tengah',
                'instrument' => 'Gamelan',
                'artist' => 'Ki Manteb Sudharsono',
                'release_year' => 2016,
                'audio_file' => 'gamelan.jpeg', 
                'description' => 'Ensembel musik perunggu megah yang memadukan kelembutan vokal sinden dengan laras pelog dan slendro.'
            ]
        ];

        foreach ($musics as $music) {
            TraditionalMusic::create($music);
        }
    }
}