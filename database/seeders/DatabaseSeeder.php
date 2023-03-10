<?php

namespace Database\Seeders;
use Illuminate\Support\Arr;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Models\Role;
use App\Models\Client;
use App\Models\Ranndez_Vous;
use App\Models\Service;
use App\Models\Succurcale;
use App\Models\Technicien;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::factory(4)->create();
        Client::factory(10)->create();
        Succurcale::factory(10)->create(); 
        Service::factory(10)->create();
        Technicien::factory(5)->create();
        Ranndez_Vous::factory(10)->create();        
    }
}