<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "user";
        $user->email = "user1@mail.com";
        $user->password = Hash::make("11111111");
        $user->gender = 'Laki-laki';
        $user->phone = '081234567890';
        $user->role = "USER";
        $user->save();

        // $addUserData = factory(App\Model\UserData::class)->create([
        //     'fullname' => 'admin',
        //     'user_id' => $user->id,
        // ]);
        // $user->assignRole('ADMIN');
    }
}
