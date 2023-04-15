<?php

namespace App\Console\Commands;

use App\Models\Tag;
use App\Models\TagOrganisation;
use Illuminate\Console\Command;

class MoveTagsOrganisation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:tags-organisation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()    
    {
        $dublicate_tags = Tag::select('name')
                ->groupBy('name')
                ->having(\DB::raw('count(name)'), '>', 1)
                ->pluck('name');
            foreach($dublicate_tags as $v)
            {
                $case = Tag::where('name', $v)->get()->toArray();
                dd($case);
            }
        return Command::SUCCESS;
    }
    public function move_tag_organisation()
    {
        $tags = Tag::all();
        foreach($tags as $t){ 
        TagOrganisation::create([
            'organisation_id'=> $t->organisation_id,
            'tag_id'=> $t->id
        ]);
       }
    }
}
