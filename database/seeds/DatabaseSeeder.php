<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    public function run(){
        $this->call(SeedBanner::class);
        $this->call(SeedContato::class);
        $this->call(SeedDoutores::class);
        $this->call(SeedGaleria::class);
        $this->call(SeedTextos::class);
    }
}
