<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
class PostSeeder extends Seeder
{
    protected $posts;
    protected $faker;

    public function __construct(Post $posts, Faker $faker){
        $this->posts = $posts;
        $this->faker = $faker;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
 /*   public function run()
    {
        foreach(range(1, 100) as $x){
            $this->posts->create([
                'title' => $this->faker->sentence(2),
                'body' => $this->faker-sentence(3),
            ]);
        }
    }
}*/
public function run()
    {
       
        foreach(range(1, 100) as $x){
            $this->posts->create([
                'title' => $this->faker->sentence(2),
                'body' => $this->faker->sentence(30),
            ]);
        }
    }
}
