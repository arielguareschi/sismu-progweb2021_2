<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'administrador',
        'email'=>'admin@admin.com',
        'password'=>bcrypt('1234567890')]);
    }
}
