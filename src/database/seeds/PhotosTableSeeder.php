<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // todo 05: シーダーを実装
        $now = \Carbon\Carbon::now();
        for ($i = 1; $i <= 10; $i++) {
            $photo = [
                'title' => 'タイトル' . $i,
                'body' => '本文' . $i,
                'created_at' => $now,
                'updated_at' => $now
            ];
            DB::table('photos')->insert($photo);
        }
    }
}
