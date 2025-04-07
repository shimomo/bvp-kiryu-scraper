<?php

declare(strict_types=1);

namespace BVP\KiryuScraper\Tests\Scrapers;

/**
 * @author shimomo
 */
final class TimeScraperDataProvider
{
    /**
     * @return array
     */
    public static function scrapeProvider(): array
    {
        return [
            [
                'arguments' => [1, '2025-04-06'],
                'expected' => [
                    'boat_number_1_racer_name' => '飯塚響',
                    'boat_number_1_racer_exhibition_time' => 6.87,
                    'boat_number_1_racer_half_lap_time' => 18.70,
                    'boat_number_1_racer_turn_time' => 4.41,
                    'boat_number_1_racer_straight_time' => 7.33,
                    'boat_number_2_racer_name' => '野田彩加',
                    'boat_number_2_racer_exhibition_time' => 6.87,
                    'boat_number_2_racer_half_lap_time' => 18.44,
                    'boat_number_2_racer_turn_time' => 4.48,
                    'boat_number_2_racer_straight_time' => 7.50,
                    'boat_number_3_racer_name' => '奥村明日香',
                    'boat_number_3_racer_exhibition_time' => 6.87,
                    'boat_number_3_racer_half_lap_time' => 18.35,
                    'boat_number_3_racer_turn_time' => 4.48,
                    'boat_number_3_racer_straight_time' => 7.38,
                    'boat_number_4_racer_name' => '河内悠利杏',
                    'boat_number_4_racer_exhibition_time' => 6.93,
                    'boat_number_4_racer_half_lap_time' => 18.76,
                    'boat_number_4_racer_turn_time' => 4.52,
                    'boat_number_4_racer_straight_time' => 7.48,
                    'boat_number_5_racer_name' => '中曽瑠華',
                    'boat_number_5_racer_exhibition_time' => 6.94,
                    'boat_number_5_racer_half_lap_time' => 18.81,
                    'boat_number_5_racer_turn_time' => 4.27,
                    'boat_number_5_racer_straight_time' => 7.70,
                    'boat_number_6_racer_name' => '高橋涼夏',
                    'boat_number_6_racer_exhibition_time' => 6.91,
                    'boat_number_6_racer_half_lap_time' => 18.94,
                    'boat_number_6_racer_turn_time' => 4.61,
                    'boat_number_6_racer_straight_time' => 7.54,
                ],
            ],
            [
                'arguments' => [5, '2025-04-06'],
                'expected' => [
                    'boat_number_1_racer_name' => '松本晶恵',
                    'boat_number_1_racer_exhibition_time' => 6.96,
                    'boat_number_1_racer_half_lap_time' => 18.52,
                    'boat_number_1_racer_turn_time' => 4.71,
                    'boat_number_1_racer_straight_time' => 7.39,
                    'boat_number_2_racer_name' => '山川波乙',
                    'boat_number_2_racer_exhibition_time' => 6.87,
                    'boat_number_2_racer_half_lap_time' => 18.70,
                    'boat_number_2_racer_turn_time' => 4.75,
                    'boat_number_2_racer_straight_time' => 7.43,
                    'boat_number_3_racer_name' => '登みひ果',
                    'boat_number_3_racer_exhibition_time' => 6.88,
                    'boat_number_3_racer_half_lap_time' => 18.75,
                    'boat_number_3_racer_turn_time' => 4.46,
                    'boat_number_3_racer_straight_time' => 7.41,
                    'boat_number_4_racer_name' => '前田紗希',
                    'boat_number_4_racer_exhibition_time' => 6.96,
                    'boat_number_4_racer_half_lap_time' => 18.52,
                    'boat_number_4_racer_turn_time' => 4.71,
                    'boat_number_4_racer_straight_time' => 7.49,
                    'boat_number_5_racer_name' => '高橋涼夏',
                    'boat_number_5_racer_exhibition_time' => 6.95,
                    'boat_number_5_racer_half_lap_time' => 19.10,
                    'boat_number_5_racer_turn_time' => 4.47,
                    'boat_number_5_racer_straight_time' => 7.47,
                    'boat_number_6_racer_name' => '高憧四季',
                    'boat_number_6_racer_exhibition_time' => 7.00,
                    'boat_number_6_racer_half_lap_time' => 18.96,
                    'boat_number_6_racer_turn_time' => 4.49,
                    'boat_number_6_racer_straight_time' => 7.48,
                ],
            ],
        ];
    }
}
