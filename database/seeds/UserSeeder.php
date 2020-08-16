<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $user = new User();
            $user->name = "Chamaiporn Tida";
            $user->email = "chamaiporntida60@gmail.com";
            $user->password = bcrypt("1234");
            $user->save();
        }

    }
}
