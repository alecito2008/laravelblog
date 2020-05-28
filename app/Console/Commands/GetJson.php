<?php

namespace App\Console\Commands;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Console\Command;

class GetJson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get post from API';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $url = "http://sq1-api-test.herokuapp.com/posts";
        $json = json_decode(file_get_contents($url), true);
        //Each data to save into DB
        foreach($json['data'] AS $row){
            //Validate exists
            $data = Post::All();
            $find = $data->filter(function($item, $row) {
                return $item->title === $row;
            })->first();
            if (!is_null($find)){
                echo "Not found!";
            }else{
                $post = Post::create([
                    'title'       => $row['title'],
                    'body'        => $row['description'],
                    'created_at'  => $row['publication_date'],
                    'category_id' => 1,
                    'user_id' => 1                    
                ])->dispatch($details)->onQueue('processing');;
                echo "creadetd!";
            }
        }
    }
}
