<?php

use Illuminate\Database\Seeder;

class BookmarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_ids = ['1', '2', '3'];
        $faker    = app(Faker\Generator::class);

        $bookmarks = factory(\App\Models\Bookmark::class)
            ->times(100)
            ->make()
            ->each(function ($bookmark) use ($faker, $user_ids) {
                $bookmark->user_id = $faker->randomElement($user_ids);
            });
        \App\Models\Bookmark::insert($bookmarks->toArray());
    }
}
