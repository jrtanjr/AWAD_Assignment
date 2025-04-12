<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'owner_id' => 1,
            'freelancer_id' => 0,
            'title' => 'AWAD Development Project 2',
            'description' => 'Build a Laravel-based project management system.',
            'budget' => 8888,
        ]);
    }
}
