<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinsi = array(
            array('id' => '11', 'provinsi' => 'ACEH'),
            array('id' => '12', 'provinsi' => 'SUMATERA UTARA'),
            array('id' => '13', 'provinsi' => 'SUMATERA BARAT'),
            array('id' => '14', 'provinsi' => 'RIAU'),
            array('id' => '15', 'provinsi' => 'JAMBI'),
            array('id' => '16', 'provinsi' => 'SUMATERA SELATAN'),
            array('id' => '17', 'provinsi' => 'BENGKULU'),
            array('id' => '18', 'provinsi' => 'LAMPUNG'),
            array('id' => '19', 'provinsi' => 'KEPULAUAN BANGKA BELITUNG'),
            array('id' => '21', 'provinsi' => 'KEPULAUAN RIAU'),
            array('id' => '31', 'provinsi' => 'DKI JAKARTA'),
            array('id' => '32', 'provinsi' => 'JAWA BARAT'),
            array('id' => '33', 'provinsi' => 'JAWA TENGAH'),
            array('id' => '34', 'provinsi' => 'DI YOGYAKARTA'),
            array('id' => '35', 'provinsi' => 'JAWA TIMUR'),
            array('id' => '36', 'provinsi' => 'BANTEN'),
            array('id' => '51', 'provinsi' => 'BALI'),
            array('id' => '52', 'provinsi' => 'NUSA TENGGARA BARAT'),
            array('id' => '53', 'provinsi' => 'NUSA TENGGARA TIMUR'),
            array('id' => '61', 'provinsi' => 'KALIMANTAN BARAT'),
            array('id' => '62', 'provinsi' => 'KALIMANTAN TENGAH'),
            array('id' => '63', 'provinsi' => 'KALIMANTAN SELATAN'),
            array('id' => '64', 'provinsi' => 'KALIMANTAN TIMUR'),
            array('id' => '65', 'provinsi' => 'KALIMANTAN UTARA'),
            array('id' => '71', 'provinsi' => 'SULAWESI UTARA'),
            array('id' => '72', 'provinsi' => 'SULAWESI TENGAH'),
            array('id' => '73', 'provinsi' => 'SULAWESI SELATAN'),
            array('id' => '74', 'provinsi' => 'SULAWESI TENGGARA'),
            array('id' => '75', 'provinsi' => 'GORONTALO'),
            array('id' => '76', 'provinsi' => 'SULAWESI BARAT'),
            array('id' => '81', 'provinsi' => 'MALUKU'),
            array('id' => '82', 'provinsi' => 'MALUKU UTARA'),
            array('id' => '91', 'provinsi' => 'PAPUA BARAT'),
            array('id' => '94', 'provinsi' => 'PAPUA'),
        );

        $insert = DB::table('provinsi')->insert($provinsi);
    }
}
