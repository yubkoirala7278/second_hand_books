<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define an array of realistic category names
        $categories = [
            'Bachelors',
            'Masters',
            'Diploma',
            'CTEVT',
            'A-Level',
            '+2 Higher Secondary',
            'Engineering',
            'Medicine',
            'Management',
            'Science',
            'Arts',
            'Information Technology',
            'Nursing',
            'Agriculture',
            'Law',
            'Education',
            'Competitive Exams',
            'Entrance Preparation',
            'Vocational Training',
            'Short Courses',
        ];

        // Prepare data for bulk insertion
        $data = [];
        foreach ($categories as $name) {
            $data[] = [
                'name' => $name,
                'slug' => Str::slug($name),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert categories table
        Category::insert($data);
    }
}
