<?php

declare(strict_types=1);

namespace BVP\KiryuScraper\Tests;

/**
 * @author shimomo
 */
final class ScraperDataProvider
{
    /**
     * @return array
     */
    public static function scrapeForecastsProvider(): array
    {
        return [
            [
                'arguments' => [1, '2024-01-02'],
                'expected' => [
                    'reporter_yesterday_comment_label' => '記者予想 前日コメント',
                    'reporter_yesterday_comment' => '亀山の逃げ期待したいがやや不安が。スタート力とターンスピードでは生方と富澤で、生方が捲って富澤の捲り差し展開も。外枠勢も捌き堅実で連対要注意。',
                    'reporter_yesterday_course_label' => '記者予想 前日コース',
                    'reporter_yesterday_course' => '123/456',
                    'reporter_yesterday_focus_label' => '記者予想 前日フォーカス',
                    'reporter_yesterday_focus' => ['3=2', '3=1', '3=5', '3-2=1', '3-2=5', '3-1=5'],
                    'reporter_yesterday_focus_exacta_label' => '記者予想 前日フォーカス 2連単',
                    'reporter_yesterday_focus_exacta' => ['3=2', '3=1', '3=5'],
                    'reporter_yesterday_focus_trifecta_label' => '記者予想 前日フォーカス 3連単',
                    'reporter_yesterday_focus_trifecta' => ['3-2=1', '3-2=5', '3-1=5'],
                    'reporter_today_comment_label' => '記者予想 当日コメント',
                    'reporter_today_comment' => 'スタート力ある富澤が捲る。小回り残す生方、展開突く柴田、自在に捌く鳥居塚の連争いで。亀山の先制注意。',
                    'reporter_today_focus_label' => '記者予想 当日フォーカス',
                    'reporter_today_focus' => ['3-256-256', '注1=23-235'],
                    'reporter_today_focus_exacta_label' => '記者予想 当日フォーカス 2連単',
                    'reporter_today_focus_exacta' => [],
                    'reporter_today_focus_trifecta_label' => '記者予想 当日フォーカス 3連単',
                    'reporter_today_focus_trifecta' => ['3-256-256', '注1=23-235'],
                ],
            ],
            [
                'arguments' => [12, '2024-01-02'],
                'expected' => [
                    'reporter_yesterday_comment_label' => '記者予想 前日コメント',
                    'reporter_yesterday_comment' => '優出機の江口が壁役になり毒島の逃げで固いか。F持ちの久田もスタート力は有り先マイできれば連軸になりそう。関のカド一撃も要注意で優出機の土屋で高配当も。',
                    'reporter_yesterday_course_label' => '記者予想 前日コース',
                    'reporter_yesterday_course' => '142/356',
                    'reporter_yesterday_focus_label' => '記者予想 前日フォーカス',
                    'reporter_yesterday_focus' => ['1=2', '1=4', '1=5', '1-2=4', '1-2=5', '1-2=3'],
                    'reporter_yesterday_focus_exacta_label' => '記者予想 前日フォーカス 2連単',
                    'reporter_yesterday_focus_exacta' => ['1=2', '1=4', '1=5'],
                    'reporter_yesterday_focus_trifecta_label' => '記者予想 前日フォーカス 3連単',
                    'reporter_yesterday_focus_trifecta' => ['1-2=4', '1-2=5', '1-2=3'],
                    'reporter_today_comment_label' => '記者予想 当日コメント',
                    'reporter_today_comment' => '実績十分、毒島の逃げを軸に。スリット踏み込み自在に捌く土屋が追走。後は連争いに。関のカド捲り注意。穴は土屋が捲った時の椎名。',
                    'reporter_today_focus_label' => '記者予想 当日フォーカス',
                    'reporter_today_focus' => ['1-5=全', '注35-全', '穴6-全'],
                    'reporter_today_focus_exacta_label' => '記者予想 当日フォーカス 2連単',
                    'reporter_today_focus_exacta' => ['注35-全', '穴6-全'],
                    'reporter_today_focus_trifecta_label' => '記者予想 当日フォーカス 3連単',
                    'reporter_today_focus_trifecta' => ['1-5=全'],
                ],
            ],
        ];
    }

    /**
     * @return array
     */
    public static function scrapeTimesProvider(): array
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
