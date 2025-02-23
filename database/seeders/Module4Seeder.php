<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module4Codelab;
use App\Models\Module4Kegiatan;

class Module4Seeder extends Seeder
{
    public function run()
    {
        Module4Codelab::factory()->count(10)->create();
        Module4Kegiatan::factory()->count(10)->create();
    }
}
