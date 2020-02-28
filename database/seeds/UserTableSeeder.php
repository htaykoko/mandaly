<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
    		[
                'name' => 'admin',
    			'email' => 'admin@gmail.com',
    			'role_id' => '99',
    			'password' => bcrypt('admin'),
    			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
