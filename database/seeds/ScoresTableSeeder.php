<?php

use App\Score;
use Illuminate\Database\Seeder;

class ScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for( $i = 0; $i <= 10; $i++ ){
            Score::create([
                'title' => 'title' . $i,
                'artist' => 'artist' . $i,
                'composer' => 'composer' . $i,
                'arranger' => 'arranger' . $i,
                'publisher' => 'publisher' . $i,
            ]);
        }
    }
}
