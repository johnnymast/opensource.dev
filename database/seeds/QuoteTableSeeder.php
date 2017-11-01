<?php

use Illuminate\Database\Seeder;

class QuoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quotes = [
            [
                'title' => 'default',
                'author' => 'Johnny',
                'quote'  => '$this is the best way to find opensource projects that you like in your natural habitat. You go girl!',
                'status' => 'PUBLISHED',
            ]
        ];

        foreach ($quotes as $quote) {
            \Illuminate\Support\Facades\DB::table('quotes')->insert([
                'title' => $quote['title'],
                'author' => $quote['author'],
                'quote' => $quote['quote'],
                'status' => $quote['status'],
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ]);
        }
    }
}
