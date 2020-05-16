<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name','admin')->first();
        $editorRole = Role::where('name','editor')->first();
        $advertiserRole = Role::where('name','advertiser')->first();
        $userRole = Role::where('name','user')->first();

        $admin = User::create([
            'name' => 'OWC Admin',
            'email' => 'ourwebcreation.com.np@gmail.com',
            'password' => Hash::make('nepal123')
        ]);

        $editor = User::create([
            'name' => 'OWC Editor',
            'email' => 'surencool4@gmail.com',
            'password' => Hash::make('nepal123')
        ]);

        $advertiser = User::create([
            'name' => 'OWC Advertiser',
            'email' => 'khadkareeta01@gmail.com',
            'password' => Hash::make('nepal123')
        ]);

        $user = User::create([
            'name' => 'OWC User',
            'email' => 'info@ourwebcreation.com',
            'password' => Hash::make('nepal123')
        ]);

        $admin->roles()->attach($adminRole);
        $editor->roles()->attach($editorRole);
        $advertiser->roles()->attach($advertiserRole);
        $user->roles()->attach($userRole);
    }
}

