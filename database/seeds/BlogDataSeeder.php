<?php

use App\Blog;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BlogDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::insert([
            [
              'title' => 'Migration',
              'category' => 'Laravel',
              'desc' =>"Generating Migrations Each migration file name contains a timestamp, which allows Laravel to determine the order of the migrations.",
              'created_at'=> Carbon::now(),
              'updated_at' => Carbon::now()
            ],
            [
              'title' => 'eloquent',
              'category' => 'Laravel',
              'desc' => 'The Eloquent ORM included with Laravel provides a beautiful, simple ActiveRecord implementation for working with your database.',
              'created_at'=> Carbon::now(),
              'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Oracle support',
                'category' => 'MySQL',
                'desc' => 'This is an aggregated feed of various blogs of Oracle support staff who work and support MySQL customers and users. ',
                'created_at'=> Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}