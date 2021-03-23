<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            // 1
            [
                'symbol' => 'r--',
                'number' => '4',
                'description' => '読み取りのみ可能'
            ],
            // 2
            [
                'symbol' => '-w-',
                'number' => '2',
                'description' => '書き込みのみ可能'
            ],
            // 2
            [
                'symbol' => '--x',
                'number' => '1',
                'description' => '実行のみ可能'
            ],
            // 4
            [
                'symbol' => 'rw-',
                'number' => '6',
                'description' => '読み取りと書き込みが可能'
            ],
            // 5
            [
                'symbol' => '-wx',
                'number' => '3',
                'description' => '書き込みと実行が可能'
            ],
            // 6
            [
                'symbol' => 'r-x',
                'number' => '5',
                'description' => '読み取りと実行が可能'
            ],
            // 7
            [
                'symbol' => 'rwx',
                'number' => '7',
                'description' => '読み取り・書き込み・実行が全て可能'
            ],
            // 8
            [
                'symbol' => '---',
                'number' => '0',
                'description' => '権限なし'
            ],
        ]);
    }
}
