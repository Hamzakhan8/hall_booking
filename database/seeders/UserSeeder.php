<?php

namespace Database\Seeders;

use App\Models\Contacts;
use App\Models\HallCategory;
use App\Models\Profile;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * Creates the relationship seeders data into
         * the database
         */
        User::factory(3)->create()->each(function ($user)
        {
            $user->profile()->save(Profile::factory()->make());
            $user->hallCategory()->save(HallCategory::factory()->make());
            // $user->hall()->save(Hall::factory()->make());
            // $user->bookings()->save(Bookings::factory()->make());
            // $user->comments()->save(Comments::factory()->make());
            $user->contact()->save(Contacts::factory()->make());
            // $user->halls_meta()->save(Halls_meta::factory()->make());
            // $user->reply()->save(Reply::factory()->make());
            // $user->reviews()->save(Reviews::factory()->make());
            $user->transactions()->save(Transactions::factory()->make());

        });
    }
}
