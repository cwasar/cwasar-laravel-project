<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Tags extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create(['title' => 'anal']);
        Tag::create(['title' => 'anal2']);
        Tag::create(['title' => 'anal3']);
        Tag::create(['title' => 'anal4']);
        Tag::create(['title' => 'anal5']);
    }
}
