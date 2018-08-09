<?php

use Illuminate\Database\Seeder;

use App\User as UserEloquent;
use App\Student as StudentEloquent;
use App\Score as ScoreEloquent;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(TestTableSeeder::class);
    	$this->call(DataTableSeeder::class);
    }
}
