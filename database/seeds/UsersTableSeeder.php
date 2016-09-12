<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::insert( ['id' => 10001, 'first_name' => 'test', 'last_name' => 'user', 'email' => 'test@trioangle.com', 'password' => Hash::make('makent'), 'status' => 'Active', 'created_at' => date('Y-m-d H:i:s')] );

        DB::table('profile_picture')->delete();
        DB::table('users_verification')->delete();

        DB::table('profile_picture')->insert(['user_id' => 10001, 'photo_source' => 'Local']);
        DB::table('users_verification')->insert(['user_id' => 10001, 'email' => 'yes']);
    }
}
