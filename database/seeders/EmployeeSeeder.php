<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert([
            'name' => 'Demo Demo',
            'email' => 'test@test.cl',
            'phone' => '99999999',
            'address' => 'Mi House',
            'expierence' => 'A lot',
            'image' => 'https://ericobreque.cl/img/eric.jpg',
            'salary' => '5000',
            'vacation' => 'January',
            'city' => 'Santiago'
        ]);
    }
}
