<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Conversation;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Bilal',
            'email' => 'bilal@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456+'),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Ahmed',
            'email' => 'ahmed@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456+'),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Othman',
            'email' => 'othman@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456+'),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Ali',
            'email' => 'ali@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456+'),
            'remember_token' => Str::random(10),
        ]);


        // Conversation
        Conversation::create(
            [
                'name' => 'Family Group',
                'uuid' => Str::uuid(),
                'user_id' => 1,
            ]
        );
        Conversation::create(
            [
                'name' => 'Work Group',
                'uuid' => Str::uuid(),
                'user_id' => rand(1, 4),
            ]
        );
        Conversation::create(
            [
                'name' => 'Friends Group',
                'uuid' => Str::uuid(),
                'user_id' => rand(1, 4),
            ]
        );
        Conversation::create(
            [
                'name' => 'Guys Group',
                'uuid' => Str::uuid(),
                'user_id' => rand(1, 4),
            ]
        );
        Conversation::create(
            [
                'name' => 'Art Group',
                'uuid' => Str::uuid(),
                'user_id' => rand(1, 4),
            ]
        );
        DB::table('conversation_user')->insert(['conversation_id' => 1, 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()]);
        DB::table('conversation_user')->insert(['conversation_id' => 1, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()]);
        DB::table('conversation_user')->insert(['conversation_id' => 1, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()]);
        DB::table('conversation_user')->insert(['conversation_id' => 1, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()]);

        DB::table('conversation_user')->insert(['conversation_id' => 2, 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()]);
        DB::table('conversation_user')->insert(['conversation_id' => 2, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()]);

        DB::table('conversation_user')->insert(['conversation_id' => 3, 'user_id' => 1, 'created_at' => now(), 'updated_at' => now()]);
        DB::table('conversation_user')->insert(['conversation_id' => 3, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()]);
        DB::table('conversation_user')->insert(['conversation_id' => 3, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()]);

        DB::table('conversation_user')->insert(['conversation_id' => 4, 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()]);
        DB::table('conversation_user')->insert(['conversation_id' => 4, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()]);
        DB::table('conversation_user')->insert(['conversation_id' => 4, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()]);

        DB::table('conversation_user')->insert(['conversation_id' => 5, 'user_id' => 3, 'created_at' => now(), 'updated_at' => now()]);
        DB::table('conversation_user')->insert(['conversation_id' => 5, 'user_id' => 4, 'created_at' => now(), 'updated_at' => now()]);
        $this->call(MessageTableSeeder::class);
    }
}
