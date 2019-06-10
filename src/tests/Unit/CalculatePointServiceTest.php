<?php
declare(strict_types=1);

namespace Tests\Unit;

use App\Services\CalculatePointService;
use Tests\TestCase;

// todo 07: ユニットテストを実装
class CalculatePointServiceTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider_for_calcPoint
     * @param int $expected
     * @param int $amount
     * @throws \App\Exceptions\PreConditionException
     */
    public function calcPoint(int $expected, int $amount)
    {
        $result = CalculatePointService::calcPoint($amount);

        $this->assertSame($expected, $result);
    }

    public function dataProvider_for_calcPoint(): array
    {
        return [
            '購入金額が0なら0ポイント' => [0, 0],
            '購入金額が999なら0ポイント' => [0, 999],
            '購入金額が1000なら10ポイント' => [10, 1000],
            '購入金額が9999なら99ポイント' => [99, 9999],
            '購入金額が10000なら200ポイント' => [200, 10000],
        ];
    }

    /**
     * @test
     * @expectedException \App\Exceptions\PreConditionException
     * @expectedExceptionMessage 購入金額が負の数
     */
    public function calcPoint_購入金額が負の数なら例外をスロー()
    {
        CalculatePointService::calcPoint(-1);
    }
}
