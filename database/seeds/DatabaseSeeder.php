<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory('App\Doctor')->create(['nip' => 'doc', 'password' => bcrypt('123456')]);
        factory('App\Patient')->create(['nip' => 'pat', 'password' => bcrypt('123456')]);
        factory('App\Staff')->create(['nip' => 'stf', 'password' => bcrypt('123456')]);
    }
}
