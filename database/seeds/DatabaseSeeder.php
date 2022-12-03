<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Role::class)->create();
        factory(Role::class)->create([
            "role" => "admin",
        ]);
        factory(Role::class)->create([
            "role" => "agent",
        ]);
        factory(User::class, 1)->create([
            "role_id" => 2,
        ]);
        factory(User::class, 1)->create([
            "role_id" => 3,
        ]);
        factory(User::class)->create();
    }
}
