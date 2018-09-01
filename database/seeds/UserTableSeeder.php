<?php

use Faker\Generator;
use TeachMe\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends BaseSeeder
{
    public function run()
    {
        $this->createAdmin();

        $this->createMultiple(50);
    }

    private function createAdmin()
    {
        $this->create([
            'name' => 'Cesar Acual',
            'email' => 'chechaacual@gmail.com',
            'password' => bcrypt('admin')
        ]);
    }

    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('secret')
        ];
    }
}
