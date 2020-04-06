<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Page;

class VoyagerPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Page::count() == 0) {
            Page::create([
                'author_id' => 0,
                'excerpt' => 'This page has no content yet.',
                'title' => 'About',
                'status' => 'ACTIVE',
                'body' => 'This page has no content yet.',
                'slug' => 'about',
            ]);
        }
    }
}
