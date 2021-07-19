<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrComics = config('comics');

        foreach ($arrComics as $item) {

            $newComic = new Comic();

            $newComic->title = $item['title'];
            $newComic->description = $item['description'];
            $newComic->thumb = $item['thumb'];
            $newComic->price = $item['price'];
            $newComic->series = $item['series'];
            $newComic->sale_date = $item['sale_date'];
            $newComic->type = $item['type'];
            
            $newComic->save();

        }
    }
}
