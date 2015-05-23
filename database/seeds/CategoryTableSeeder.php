<?php

/**
 * Scopes Table Seeder
 *
 */
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {

    public function run() {
        DB::table('categories')->delete();

        DB::table('categories')->insert([
            'name' => 'Baju',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
		
		DB::table('categories')->insert([
            'name' => 'Tas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
		
		DB::table('categories')->insert([
            'name' => 'Dompet',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

}
