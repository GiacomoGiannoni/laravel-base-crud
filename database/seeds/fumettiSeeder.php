<?php

use Illuminate\Database\Seeder;
use App\Fumetti;

class fumettiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comic::class, 50)->create();
    }
}
