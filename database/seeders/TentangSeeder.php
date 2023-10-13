<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tentang;

class TentangSeeder extends Seeder
{
    public function run(): void
    {
        Tentang::create([
            'slug'              => 'tentang',
            'thumbnail'         => 'fJ4KGB3HnDSC_0260.JPG',
            'deskripsi'         => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
            <?xml encoding="utf-8" ?><!--?xml encoding="utf-8" ?--><!--?xml encoding="utf-8" ?--><html><body><p>isi informasi tentang sekolah</p></body></html>
            ',
            'contact_telp'      => '(0342)',
            'contact_wa'        => '082000000',
            'email'             => 'www.google.com',
        ]);
    }
}
