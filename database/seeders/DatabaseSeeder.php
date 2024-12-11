<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Movies;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory(10)->create();

        DB::table('movies')->insert([
            [
                'title' => 'Dune: Part Two',
                'overview' => 'The continuation of Paul Atreides\' journey, navigating political intrigue and war on the desert planet of Arrakis.',
                'release_date' => '2024-03-15',
                'created_at' => now(),
            ],
            [
                'title' => 'The Hunger Games: The Ballad of Songbirds and Snakes',
                'overview' => 'A prequel exploring the origins of the Hunger Games through the story of Coriolanus Snow.',
                'release_date' => '2024-02-16',
                'created_at' => now(),
            ],
            [
                'title' => 'Mission: Impossible - Dead Reckoning Part Two',
                'overview' => 'Ethan Hunt and his team continue their battle against global threats in this high-octane spy thriller.',
                'release_date' => '2024-07-28',
                'created_at' => now(),
            ],
            [
                'title' => 'Spider-Man: Beyond the Spider-Verse',
                'overview' => 'Miles Morales\' multiverse-spanning adventure continues with new challenges and allies.',
                'release_date' => '2024-03-29',
                'created_at' => now(),
            ],
            [
                'title' => 'All We Imagine as Light',
                'overview' => 'An evocative exploration of working-class life in contemporary Mumbai, told through compelling narratives.',
                'release_date' => '2024-01-20',
                'created_at' => now(),
            ],
            [
                'title' => 'Girls Will Be Girls',
                'overview' => 'A rebellious awakening set in a strict boarding school nestled in the Himalayas.',
                'release_date' => '2024-02-10',
                'created_at' => now(),
            ],
            [
                'title' => 'The Promised Land',
                'overview' => 'A period drama following Captain Ludvig Kahlen’s quest to cultivate Denmark’s heathland in the 18th century.',
                'release_date' => '2024-02-05',
                'created_at' => now(),
            ],
            [
                'title' => 'The Kitchen',
                'overview' => 'A gripping tale of survival in a dystopian world where the marginalized rise against oppression.',
                'release_date' => '2024-06-12',
                'created_at' => now(),
            ],
            [
                'title' => 'Stopmotion',
                'overview' => 'A chilling psychological horror about an animator grappling with dark forces.',
                'release_date' => '2024-05-18',
                'created_at' => now(),
            ],
            [
                'title' => 'Good Grief',
                'overview' => 'An emotionally resonant comedy-drama exploring grief and friendship.',
                'release_date' => '2024-04-03',
                'created_at' => now(),
            ],
        ]);
    }
}
