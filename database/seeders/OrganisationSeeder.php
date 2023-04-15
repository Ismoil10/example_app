<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Organisation;
use App\Models\Comments;
use App\Models\Tag;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organisation::factory(100)->create()->each(function (Organisation $v){
            $v->comments()->saveMany(Comments::factory(10)->make());
            $v->tags()->saveMany(Tag::factory(10)->make());    

        });
    }
}
