<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostVote;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Toys']);
        Category::create(['name' => 'Gadgets']);
    }
}
