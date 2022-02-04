<?php
use App\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['economy' ,'environment', 'politics', 'hobby', 'design'];

        foreach($tags as $tag) {
            $newTag = new Tag();
            $newTag->tag_name = $tag;
            $newTag->save();
        }
    }
}
