<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        ['id'=>6, 'email'=>'sinh','password'=>bcrypt(1234)]
        ]);
       //  \App\Models\User::factory(5)->create();
    }
}
