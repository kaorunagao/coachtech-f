<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $param = [
            'name' => 'アイウ',
            'email' => 'abc@yahoo.co.jp'
        ];
        DB::table('tests')->insert($param);
        $param = [
            'name' => 'エオ',
            'email' => 'de@gmail.com'
        ];
        DB::table('tests')->insert($param);
    }
}
