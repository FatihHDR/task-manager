<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module1Codelab;
use App\Models\Module1Kegiatan;

class Module1Seeder extends Seeder
{
    public function run()
    {
        Module1Codelab::factory()->count(10)->create();
        Module1Kegiatan::factory()->count(10)->create();
    }
}
