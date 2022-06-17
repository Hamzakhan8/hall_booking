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
    }
}
