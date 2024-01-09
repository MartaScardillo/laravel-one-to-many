<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();

        $projectsNames = [
            'Progetto 1',
            'Progetto 2',
            'Progetto 3',
            'Progetto 4',
            'Progetto 5',
            'Progetto 6',
            'Progetto 7',
            'Progetto 8',
            'Progetto 9',
            'Progetto 10',
        ];

        foreach ( $projectsNames as $name ) {
            Project::factory()->create([
                'name' => $name,
            ]);
        }
    }
}
