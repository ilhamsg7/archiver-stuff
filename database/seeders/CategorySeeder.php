<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'code' => 'INV',
                'category_name' => 'Undangan',
            ],
            [
                'code' => 'ANN',
                'category_name' => 'Pengumuman',
            ],
            [
                'code' => 'DIN',
                'category_name' => 'Nota Dinas',
            ],
            [
                'code' => 'INF',
                'category_name' => 'Pemberitahuan',
            ]
        ];
        Category::insert($category);
    }
}
