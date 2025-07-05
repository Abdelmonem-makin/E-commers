<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class sectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $sectionSeeder=[
        ['name'=>'man','stats'=>1],
        ['name'=>'women','stats'=>1],
        ['name'=>'kids','stats'=>1]
    ];
    Section::insert($sectionSeeder);
    }
}
