<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module3Codelab;
use App\Models\Module3Kegiatan;

class Module3Seeder extends Seeder
{
    public function run()
    {
        Module3Codelab::factory()->count(10)->create();
        Module3Kegiatan::factory()->count(10)->create();
    }
}
