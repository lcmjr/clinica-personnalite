<?php

use Illuminate\Database\Seeder;

class SeedBanner extends Seeder{

    public function run(){
        DB::table('banner')->insert(array(
            [ 'banner' => "1.jpg"],
            [ 'banner' => "1.jpg"],
            [ 'banner' => "1.jpg"]
        ));
    }
}
