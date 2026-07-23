<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'حسابداری',
                'slug' => 'accounting',
            ],
            [
                'name' => 'مالیات',
                'slug' => 'tax',
            ],
            [
                'name' => 'حقوق و دستمزد',
                'slug' => 'payroll',
            ],
            [
                'name' => 'تامین اجتماعی',
                'slug' => 'social-security',
            ],
            [
                'name' => 'سامانه مودیان',
                'slug' => 'tax-system',
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}
