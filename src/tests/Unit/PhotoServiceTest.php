<?php

namespace Tests\Unit;

use App\Models\Photo;
use App\Services\PhotoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

// todo 07: データベースユニットテストを実装
class PhotoServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function findAll_データが全て取得できること()
    {
        factory(Photo::class, 3)->create();

        $service = new PhotoService();
        $service->findAll();

        $this->assertSame(3, \DB::table('photos')->count());

    }

    /**
     * @test
     */
    public function findById_データが一件だけ取得できること()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function insert_データが新規登録されること()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function update_データが更新されること()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function delete_データが削除されること()
    {
        $this->assertTrue(true);
    }
}