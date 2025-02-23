<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module2Codelab;
use App\Models\Module2Kegiatan;

class Module2Seeder extends Seeder
{
    public function run()
    {
        Module2Codelab::factory()->count(10)->create();
        Module2Kegiatan::factory()->count(10)->create();
    }
}
