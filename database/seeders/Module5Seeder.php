<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module5Codelab;
use App\Models\Module5Kegiatan;

class Module5Seeder extends Seeder
{
    public function run()
    {
        Module5Codelab::factory()->count(10)->create();
        Module5Kegiatan::factory()->count(10)->create();
    }
}
