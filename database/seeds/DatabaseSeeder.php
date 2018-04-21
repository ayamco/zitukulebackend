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
        DB::table('roles')->insert([
            'name' =>'admin',
        ]);

        DB::table('roles')->insert([
            'name' =>'secretarietadmin',
        ]);
        
        DB::table('roles')->insert([
            'name' =>'organisationadmin',
        ]);

        DB::table('roles')->insert([
            'name' =>'groupadmin',
        ]);
    }
}
