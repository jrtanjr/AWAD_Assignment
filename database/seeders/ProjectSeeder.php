<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'owner_id' => 4,
            'freelancer_id' => 2,
            'title' => 'AWAD Development Project',
            'description' => 'Build a Laravel-based project management system.',
            'budget' => 90000,
        ]);
    }
}
