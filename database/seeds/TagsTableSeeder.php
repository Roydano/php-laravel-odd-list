<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Android',
            'Apple',
            'Smartphone',
            'PC',
            'Master Chef',
            'Cooking Time',
            'Ricette',
            'Movie',
            'DVD',
            'Streaming',
            'Calcio',
            'Tennis',
            'Boxe',
            'GF VIP',
            'Moda',
            'Gossip',
            'Money',
            'Azioni',
            'Rich'
        ];

        foreach($tags as $tag){

            $newTag = new Tag();

            $newTag->name = $tag;
            $newTag->slug = Str::slug($tag,'-');

            $newTag->save();
        }
    }
}
