<?php

use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
                [
                    'id' => 1,
                    'type' => 'title_page',
                    'content' => 'Title test',
                    'file' => '',
                ],
                [
                    'id' => 2,
                    'type' => 'description',
                    'content' => 'Description test',
                    'file' => '',
                ],
                [
                    'id' => 3,
                    'type' => 'og:title',
                    'content' => 'Title Here',
                    'file' => '',
                ],
                [
                    'id' => 4,
                    'type' => 'og:type',
                    'content' => 'article',
                    'file' => '',
                ],
                [
                    'id' => 5,
                    'type' => 'og:url',
                    'content' => 'http://www.example.com/',
                    'file' => '',
                ],
                [
                    'id' => 6,
                    'type' => 'og:image',
                    'content' => 'http://example.com/image.jpg',
                    'file' => '',
                ],
                [
                    'id' => 7,
                    'type' => 'og:description',
                    'content' => 'Description Here',
                    'file' => '',
                ],
                [
                    'id' => 8,
                    'type' => 'favicon',
                    'content' => '',
                    'file' => '',
                ],
                [
                    'id' => 9,
                    'type' => 'logo',
                    'content' => '',
                    'file' => '',
                ],
                [
                    'id' => 10,
                    'type' => 'about-us',
                    'content' => '',
                    'file' => '',
                ],
                [
                    'id' => 11,
                    'type' => 'full_name',
                    'content' => '',
                    'file' => '',
                ],
                [
                    'id' => 12,
                    'type' => 'address',
                    'content' => '',
                    'file' => '',
                ],
                [
                    'id' => 13,
                    'type' => 'email',
                    'content' => '',
                    'file' => '',
                ],
                [
                    'id' => 14,
                    'type' => 'phone_number',
                    'content' => '',
                    'file' => '',
                ],
                [
                    'id' => 15,
                    'type' => 'library_represent',
                    'content' => '',
                    'file' => '',
                ]
            ]
        );
    }
}
