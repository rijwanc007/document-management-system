<?php

use Illuminate\Database\Seeder;

class ContactManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ContactManagement::class,100)->create();
    }
}
