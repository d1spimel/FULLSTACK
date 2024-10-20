<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Добавим несколько страниц
        DB::table('page_contents')->insert([
            [
                'page_name' => 'home',
                'content' => 'Добро пожаловать на домашнюю страницу!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_name' => 'about',
                'content' => 'Это страница о нас. Мы лучшая компания!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_name' => 'contact',
                'content' => 'Свяжитесь с нами по адресу mail@mail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_name' => 'services',
                'content' => 'Мы предоставляем широкий спектр услуг!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}