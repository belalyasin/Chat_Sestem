<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\Massage;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Factory::create();
        for ($te = 1; $te <= 5; $te++) {
            $conversation = Conversation::whereId($te)->with('users')->first();
            for ($s = 1; $s <= 5; $s++) {
                Massage::create([
                    'conversation_id' => $conversation->id,
                    'user_id' => $conversation->users->random()->id,
                    'body' => $faker->sentence,
                ]);
                Conversation::whereId($te)->update(['last_massage_at' => now()]);
            }
        }
    }
}
