<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Joel',
            'email' => 'joelimalive1994@gmail.com',
            'password' => bcrypt('joel1994')
        ]);
    }
}
