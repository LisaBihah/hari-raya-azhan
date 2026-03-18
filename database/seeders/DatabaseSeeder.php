<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Only seed jokes if none exist yet
        if (DB::table('comments')->where('type', 'lawak')->count() === 0) {
            $lawak = [
                'Kenapa cicak tak boleh main piano? Sebab jarinya terlalu pendek!',
                'Apa beza doktor dengan cikgu? Doktor bagi ubat, cikgu bagi homework. Dua-dua bagi kita sakit kepala!',
                'Kenapa orang tua suka tidur awal? Sebab dorang nak kejar mimpi diskaun senior citizen!',
                'Apa yang lebih ringan dari bulu? Bayangan bulu!',
                'Kenapa pokok pisang tak ada kawan? Sebab dia selalu dalam keadaan tandan sorang-sorang!',
                'Doktor: "Awak kena kurangkan makan." Pesakit: "Doktor, satu hari berapa kali?" Doktor: "Satu kali." Pesakit: "Oklah, makan banyak-banyak terus!"',
                'Kenapa komputer tak pernah lapar? Sebab dia selalu ada byte!',
            ];

            foreach ($lawak as $ayat) {
                DB::table('comments')->insert([
                    'name'       => null,
                    'message'    => $ayat,
                    'type'       => 'lawak',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
