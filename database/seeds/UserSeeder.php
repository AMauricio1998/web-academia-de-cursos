<?php

use App\Helpers\Image;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(\App\Models\User::class, 20)->create();
    }
}

