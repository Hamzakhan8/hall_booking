<?php

namespace Database\Seeders;

use App\Models\Bookings;
use App\Models\Comments;
use App\Models\Contacts;
use App\Models\Hall;
use App\Models\HallCategory;
use App\Models\Halls_meta;
use App\Models\Profile;
use App\Models\Reply;
use App\Models\Reviews;
use App\Models\Transactions;
use App\Models\User;
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
        User::factory()->hasProfile()->create([
            'name' => 'Admin',
            'username' => 'admin123',
            'email' => 'admin@gmail.com',
            'role' => 'admin'
        ]);

        /**
         * Creates the relationship seeders data into
         * the database
         */
        User::factory(3)->create()->each(function ($user)
        {
            $user->hallCategory()->save(HallCategory::factory()->make());
            $user->hall()->save(Hall::factory()->make());
            $user->bookings()->save(Bookings::factory()->make());
            $user->comments()->save(Comments::factory()->make());
            $user->contact()->save(Contacts::factory()->make());
            $user->halls_meta()->save(Halls_meta::factory()->make());
            $user->profile()->save(Profile::factory()->make());
            $user->reply()->save(Reply::factory()->make());
            $user->reviews()->save(Reviews::factory()->make());
            $user->transactions()->save(Transactions::factory()->make());

        });

        Hall::factory(3)->create()->each(function ($hall)
        {
            $hall->bookings()->save(Bookings::factory()->make());
            $hall->comments()->save(Comments::factory()->make());
            $hall->reviews()->save(Reviews::factory()->make());
        });

        HallCategory::factory(3)->create()->each(function ($hallCategory)
        {
            $hallCategory->hall()->save(Hall::factory()->make());
        });

        Reply::factory(3)->create()->each(function ($reply)
        {
            $reply->comment()->save(Comments::factory()->make());
        });

        Bookings::factory(3)->create()->each(function ($bookings)
        {
            $bookings->hall()->save(Hall::factory()->make());
        });
    }
}
