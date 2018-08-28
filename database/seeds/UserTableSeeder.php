<?php

use Illuminate\Database\Seeder;
use TeachMe\Entities\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        $this->createAdmin();
    }

    private function createAdmin()
    {
        User::create([
            'name' => 'Cesar Acual',
            'email' => 'chechaacual@gmail.com',
            'password' => bcrypt('admin')
        ]);
    }
}