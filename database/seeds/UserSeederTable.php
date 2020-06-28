<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;

        $user->name = 'Administrador';
        $user->email = 'admin@admin.com';
        $user->email_verified_at = NOW();
        $user->password = bcrypt('admin');
        $user->save();
    }
}
