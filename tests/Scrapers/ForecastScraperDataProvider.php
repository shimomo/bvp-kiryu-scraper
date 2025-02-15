<?php

declare(strict_types=1);

namespace BVP\KiryuScraper\Tests\Scrapers;

/**
 * @author shimomo
 */
final class ForecastScraperDataProvider
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
                    'reporter_yesterday_course_label' => '記者予想 前日コース',
                    'reporter_yesterday_course' => '123/456',
                    'reporter_yesterday_comment_label' => '記者予想 前日コメント',
                    'reporter_yesterday_comment' => '亀山の逃げ期待したいがやや不安が。スタート力とターンスピードでは生方と富澤で、生方が捲って富澤の捲り差し展開も。外枠勢も捌き堅実で連対要注意。',
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
                    'reporter_yesterday_course_label' => '記者予想 前日コース',
                    'reporter_yesterday_course' => '142/356',
                    'reporter_yesterday_comment_label' => '記者予想 前日コメント',
                    'reporter_yesterday_comment' => '優出機の江口が壁役になり毒島の逃げで固いか。F持ちの久田もスタート力は有り先マイできれば連軸になりそう。関のカド一撃も要注意で優出機の土屋で高配当も。',
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
}
