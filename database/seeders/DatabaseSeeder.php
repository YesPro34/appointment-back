<?php

namespace Database\Seeders;
use Illuminate\Support\Arr;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Models\Role;
use App\Models\Client;
use App\Models\Service;
use App\Models\Succurcale;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Client::factory(10)->create(); 
    }
}