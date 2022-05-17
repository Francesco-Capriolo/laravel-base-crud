<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic["title"];
            $newComic->description = $comic["description"];
            $newComic->thumb = $comic["thumb"];
            $newComic->price = floatval($comic["price"]);
            $newComic->series = $comic["series"];
            $newComic->sale_date = DateTime::createFromFormat("Y-m-d", $comic["sale_date"]);
            $newComic->type = $comic["type"];
            $newComic->save();
        }
    }
}
