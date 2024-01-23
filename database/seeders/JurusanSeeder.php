<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jurusan::create([
            'nama_jurusan'      => 'Teknik Kendaraan Ringan',
            'slug'              => 'Teknik-Kendaraan-Ringan',
            'deskripsi'         => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
            <?xml encoding="utf-8" ?><!--?xml encoding="utf-8" ?--><!--?xml encoding="utf-8" ?--><html><body><p>isi informasi tentang jurusan Teknik Kendaraan Ringan</p></body></html>
            ',
        ]);
        
        Jurusan::create([
            'nama_jurusan'      => 'Teknik Bisnis Sepeda Motor',
            'slug'              => 'Teknik-Bisnis-Sepeda-Motor',
            'deskripsi'         => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
            <?xml encoding="utf-8" ?><!--?xml encoding="utf-8" ?--><!--?xml encoding="utf-8" ?--><html><body><p>isi informasi tentang jurusan Teknik Bisnis Sepeda Motor</p></body></html>
            ',
        ]);
        
        Jurusan::create([
            'nama_jurusan'      => 'Teknik Komputer Jaringan',
            'slug'              => 'Teknik-Komputer-Jaringan',
            'deskripsi'         => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
            <?xml encoding="utf-8" ?><!--?xml encoding="utf-8" ?--><!--?xml encoding="utf-8" ?--><html><body><p>isi informasi tentang jurusan Teknik Komputer dan Jaringan</p></body></html>
            ',
        ]);
        
        Jurusan::create([
            'nama_jurusan'      => 'Teknik Elektro',
            'slug'              => 'Teknik-Elektro',
            'deskripsi'         => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
            <?xml encoding="utf-8" ?><!--?xml encoding="utf-8" ?--><!--?xml encoding="utf-8" ?--><html><body><p>isi informasi tentang jurusan Teknik Elektro</p></body></html>
            ',
        ]);
        
        Jurusan::create([
            'nama_jurusan'      => 'Desain Komunikasi Visual',
            'slug'              => 'Desain-Komunikasi-Visual',
            'deskripsi'         => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
            <?xml encoding="utf-8" ?><!--?xml encoding="utf-8" ?--><!--?xml encoding="utf-8" ?--><html><body><p>isi informasi tentang jurusan Desain Komunikasi Visual</p></body></html>
            ',
        ]);

        
    }
}
