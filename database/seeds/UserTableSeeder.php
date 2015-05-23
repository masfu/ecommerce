<?php

/**
 * Scopes Table Seeder
 *
 * @package   lucadegasperi/oauth2-server-laravel
 * @author    Luca Degasperi <luca@lucadegasperi.com>
 * @copyright Copyright (c) Luca Degasperi
 * @licence   http://mit-license.org/
 * @link      https://github.com/lucadegasperi/oauth2-server-laravel
 */
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'Masfu Hisyam',
            'email' => 'al_hisyam@myself.com',
            'password' => bcrypt('12345'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

}
