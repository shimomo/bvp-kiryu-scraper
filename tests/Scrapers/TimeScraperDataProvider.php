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
                'arguments' => [1, '2024-01-02'],
                'expected' => [
                    'boat_number_1_racer_name' => '亀山高雅',
                    'boat_number_1_racer_exhibition_time' => 6.79,
                    'boat_number_1_racer_half_lap_time' => 18.34,
                    'boat_number_1_racer_turn_time' => 4.37,
                    'boat_number_1_racer_straight_time' => 7.58,
                    'boat_number_2_racer_name' => '生方靖亜',
                    'boat_number_2_racer_exhibition_time' => 6.79,
                    'boat_number_2_racer_half_lap_time' => 18.67,
                    'boat_number_2_racer_turn_time' => 4.58,
                    'boat_number_2_racer_straight_time' => 7.60,
                    'boat_number_3_racer_name' => '富澤祐作',
                    'boat_number_3_racer_exhibition_time' => 6.76,
                    'boat_number_3_racer_half_lap_time' => 18.64,
                    'boat_number_3_racer_turn_time' => 4.44,
                    'boat_number_3_racer_straight_time' => 7.76,
                    'boat_number_4_racer_name' => '佐口達也',
                    'boat_number_4_racer_exhibition_time' => 6.82,
                    'boat_number_4_racer_half_lap_time' => 18.81,
                    'boat_number_4_racer_turn_time' => 4.45,
                    'boat_number_4_racer_straight_time' => 7.70,
                    'boat_number_5_racer_name' => '柴田光',
                    'boat_number_5_racer_exhibition_time' => 6.81,
                    'boat_number_5_racer_half_lap_time' => 18.43,
                    'boat_number_5_racer_turn_time' => 4.81,
                    'boat_number_5_racer_straight_time' => 7.58,
                    'boat_number_6_racer_name' => '鳥居塚孝博',
                    'boat_number_6_racer_exhibition_time' => 6.70,
                    'boat_number_6_racer_half_lap_time' => 18.45,
                    'boat_number_6_racer_turn_time' => 4.91,
                    'boat_number_6_racer_straight_time' => 7.65,
                ],
            ],
            [
                'arguments' => [12, '2024-01-02'],
                'expected' => [
                    'boat_number_1_racer_name' => '毒島誠',
                    'boat_number_1_racer_exhibition_time' => 6.57,
                    'boat_number_1_racer_half_lap_time' => 18.00,
                    'boat_number_1_racer_turn_time' => 4.25,
                    'boat_number_1_racer_straight_time' => 7.51,
                    'boat_number_2_racer_name' => '久田敏之',
                    'boat_number_2_racer_exhibition_time' => 6.79,
                    'boat_number_2_racer_half_lap_time' => 18.45,
                    'boat_number_2_racer_turn_time' => 4.44,
                    'boat_number_2_racer_straight_time' => 7.58,
                    'boat_number_3_racer_name' => '関浩哉',
                    'boat_number_3_racer_exhibition_time' => 6.69,
                    'boat_number_3_racer_half_lap_time' => 18.52,
                    'boat_number_3_racer_turn_time' => 4.35,
                    'boat_number_3_racer_straight_time' => 7.67,
                    'boat_number_4_racer_name' => '江口晃生',
                    'boat_number_4_racer_exhibition_time' => 6.75,
                    'boat_number_4_racer_half_lap_time' => 18.67,
                    'boat_number_4_racer_turn_time' => 4.63,
                    'boat_number_4_racer_straight_time' => 7.58,
                    'boat_number_5_racer_name' => '土屋智則',
                    'boat_number_5_racer_exhibition_time' => 6.77,
                    'boat_number_5_racer_half_lap_time' => 18.45,
                    'boat_number_5_racer_turn_time' => 4.53,
                    'boat_number_5_racer_straight_time' => 7.51,
                    'boat_number_6_racer_name' => '椎名豊',
                    'boat_number_6_racer_exhibition_time' => 6.67,
                    'boat_number_6_racer_half_lap_time' => 18.68,
                    'boat_number_6_racer_turn_time' => 4.70,
                    'boat_number_6_racer_straight_time' => 7.50,
                ],
            ],
        ];
    }
}
