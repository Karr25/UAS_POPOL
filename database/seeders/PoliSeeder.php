<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Poli;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Poli::insert([
            [
                'kode_poli'=>'PM',
                'nama_poli'=>'Poli Mata',
                'jumlah'=>30,
                'updated_at'=>now(),
                'created_at'=>now()
            ],
            [
                'kode_poli'=>'PA',
                'nama_poli'=>'Poli Anak',
                'jumlah'=>30,
                'updated_at'=>now(),
                'created_at'=>now()
            ],
            [
                'kode_poli'=>'PTHT',
                'nama_poli'=>'Poli THT',
                'jumlah'=>30,
                'updated_at'=>now(),
                'created_at'=>now()
            ],
            [
                'kode_poli'=>'PJ',
                'nama_poli'=>'Poli Jiwa',
                'jumlah'=>30,
                'updated_at'=>now(),
                'created_at'=>now()
            ],
            [
                'kode_poli'=>'PS',
                'nama_poli'=>'Poli Saraf',
                'jumlah'=>30,
                'updated_at'=>now(),
                'created_at'=>now()
            ],
            [
                'kode_poli'=>'PG',
                'nama_poli'=>'Poli Gizi',
                'jumlah'=>30,
                'updated_at'=>now(),
                'created_at'=>now()
            ],
        ]);
    }
}
