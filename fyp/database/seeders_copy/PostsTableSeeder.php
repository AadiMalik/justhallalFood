<?php

namespace Database\Seeders;

use App\Models\CovidPost;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title'       => 'Protect yourself and others from COVID-19',
                'excerpt'       => 'If COVID-19 is spreading in your community, stay safe by taking some simple precautions',
                'detail'       => 'If COVID-19 is spreading in your community, stay safe by taking some simple precautions, such as physical distancing, wearing a mask, keeping rooms well ventilated, avoiding crowds, cleaning your hands, and coughing into a bent elbow or tissue. Check local advice where you live and work. Do it all!',
            ],
        ];
        foreach($posts as $key => $post)
        {
            $photo_id = $key+1;
            $post = CovidPost::create($post);
            $post->addMedia(storage_path()."/seeders/posts/$photo_id.jpg")->preservingOriginal()->toMediaCollection('image');
        }
        
        $posts = [
            [
                'title'       => 'What to do to keep yourself and others safe from COVID-19',
                'excerpt'       => 'Maintain at least a 1-metre distance between yourself and others to reduce your risk of infection when they cough, sneeze or speak.',
                'detail'       => 'Maintain at least a 1-metre distance between yourself and others to reduce your risk of infection when they cough, sneeze or speak. Maintain an even greater distance between yourself and others when indoors. The further away, the better.',            ],
        ];
        foreach($posts as $key => $post)
        {
            $post = CovidPost::create($post);
        }
    }
}
