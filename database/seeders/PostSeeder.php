<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
//DB::table('posts')->insert(['カラム名'=>'データ']);

class PostSeeder extends Seeder
{
   
    public function run()
    {
        DB::table('posts')->insert([
            'title'=>'命名の心得',
            'body'=>'命名はデータを基準に考える',
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
        ]);
    }
}
