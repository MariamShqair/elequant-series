<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Comment;
use Illuminate\Database\Eloquent\Model as Eloquent;
class DatabaseSeeder extends Seeder
{
    protected $toTruncates = ['comments','posts','users','colors','lessons'];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();
    	foreach ($this->toTruncates as $table) {
            DB::table($table)->delete();
        }

    	$this->call(CommentsTableSeeder::class);
         $this->call(PostTableSeeder::class);
         $this->call(TestsTableSeeder::class);
          $this->call(OrderSeedTable::class);
            $this->call(ColorTableSeeder::class);
            $this->call(LessonsTableSeeder::class);
            $this->call(VideosTableSeeder::class);
    }
}
