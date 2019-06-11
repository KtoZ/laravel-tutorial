<?php

namespace Tests\Unit;

use App\Models\Photo;
use App\Services\PhotoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

// todo 07: データベースユニットテストを実装
class PhotoServiceTest extends TestCase
{
    // todo: 一度に動かすとエラーになる
    // todo: Breakpoint で止まらない = Debug できない
    use RefreshDatabase;

    /**
     * @test
     */
    public function findAll_データが全て取得できること()
    {
        factory(Photo::class, 3)->create();

        $service = new PhotoService();
        $expected = $service->findAll();

        $this->assertSame(3, $expected->count());

    }

    /**
     * @test
     */
    public function findById_データが一件取得できること()
    {
        factory(Photo::class)->create([
            'title' => 'test-title',
            'body' => 'test-body',
        ]);

        $service = new PhotoService();
        $expected = $service->findById(1);

        $this->assertSame("test-title", $expected->title);
        $this->assertSame("test-body", $expected->body);
    }

    /**
     * @test
     */
    public function insert_データが新規登録されること()
    {
        $service = new PhotoService();
        $service->insert("test-title", "test-body");

        $this->assertDatabaseHas('photos', [
            'title' => 'test-title',
            'body' => 'test-body',
        ]);
    }

    /**
     * @test
     */
    public function update_データが更新されること()
    {
        factory(Photo::class)->create();

        $service = new PhotoService();
        $service->update(1, "test-title", "test-body");

        $this->assertDatabaseHas('photos', [
            'title' => 'test-title',
            'body' => 'test-body',
        ]);
    }

    /**
     * @test
     */
    public function delete_データが削除されること()
    {
        factory(Photo::class)->create();

        $service = new PhotoService();
        $service->delete(1);

        $this->assertSame(0, \DB::table('photos')->count());
    }
}