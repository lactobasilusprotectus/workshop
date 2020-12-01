<?php

namespace Database\Seeders;

use App\Models\Workshop;
use Illuminate\Database\Seeder;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Workshop::create([
           'title_institute' => 'Dummy Institute',
            'title_webinar' => 'Dummy Webinar',
            'explain' => 'Dummy Explain'
        ]);
    }
}
