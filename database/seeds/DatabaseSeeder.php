<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Model\Donor;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('DonorSeeder');
    }
}

class DonorSeeder extends Seeder{

    public function run()
    {
        Donor::create(['first' => 'John', 'middle' => 'Q', 'last' => 'Donor', 'email' => 'example@example.com', 'employer' => 'State of Michigan', 'job' => 'Janitor', '123 Main St', 'Lansing', 'MI', '1-517-999-9999']);

    }
}