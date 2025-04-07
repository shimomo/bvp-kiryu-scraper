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
                'arguments' => [1, '2025-04-06'],
                'expected' => [
                    'reporter_yesterday_comment_label' => '記者予想 前日コメント',
                    'reporter_yesterday_comment' => '転覆後も2着を並べている野田に注目の一戦。地元飯塚も踏ん張りたいイン戦だが、野田が内寄り自在に突破し2勝目を狙う。奥村も食い込める比較だ。',
                    'reporter_yesterday_course_label' => '記者予想 前日コース',
                    'reporter_yesterday_course' => '123/456',
                    'reporter_yesterday_focus_label' => '記者予想 前日フォーカス',
                    'reporter_yesterday_focus' => ['2=1', '2=3', '2=4', '2-1=3', '2-1=4', '2-3=4'],
                    'reporter_yesterday_focus_exacta_label' => '記者予想 前日フォーカス 2連単',
                    'reporter_yesterday_focus_exacta' => ['2=1', '2=3', '2=4'],
                    'reporter_yesterday_focus_trifecta_label' => '記者予想 前日フォーカス 3連単',
                    'reporter_yesterday_focus_trifecta' => ['2-1=3', '2-1=4', '2-3=4'],
                    'reporter_today_comment_label' => '記者予想 当日コメント',
                    'reporter_today_comment' => '飯塚のスタートが不安定で、野田が捲る。奥村が捲り差して逆転も。この2人を軸に後は連下で。先制する飯塚の連対注意。穴は中曽の捲り。',
                    'reporter_today_focus_label' => '記者予想 当日フォーカス',
                    'reporter_today_focus' => ['2=3-全', '注1=23-235', '穴5=1236'],
                    'reporter_today_focus_exacta_label' => '記者予想 当日フォーカス 2連単',
                    'reporter_today_focus_exacta' => ['穴5=1236'],
                    'reporter_today_focus_trifecta_label' => '記者予想 当日フォーカス 3連単',
                    'reporter_today_focus_trifecta' => ['2=3-全', '注1=23-235'],
                ],
            ],
            [
                'arguments' => [5, '2025-04-06'],
                'expected' => [
                    'reporter_yesterday_comment_label' => '記者予想 前日コメント',
                    'reporter_yesterday_comment' => '今回は機力出しに苦労した印象の地元松本。パワー不足は否めないが、インなら意地の逃げで人気に応えよう。前田、高憧のダッシュ駆けは脅威。',
                    'reporter_yesterday_course_label' => '記者予想 前日コース',
                    'reporter_yesterday_course' => '123/465',
                    'reporter_yesterday_focus_label' => '記者予想 前日フォーカス',
                    'reporter_yesterday_focus' => ['1=4', '1=6', '1=2', '1-4=6', '1-4=2', '1-6=2'],
                    'reporter_yesterday_focus_exacta_label' => '記者予想 前日フォーカス 2連単',
                    'reporter_yesterday_focus_exacta' => ['1=4', '1=6', '1=2'],
                    'reporter_yesterday_focus_trifecta_label' => '記者予想 前日フォーカス 3連単',
                    'reporter_yesterday_focus_trifecta' => ['1-4=6', '1-4=2', '1-6=2'],
                    'reporter_today_comment_label' => '記者予想 当日コメント',
                    'reporter_today_comment' => '内枠勢のスタートが不安定で、前田が捲る。高憧が捲り差して逆転も。小回り残す松本、山川も連争いに。松本の先制注意。穴は登の先捲り。',
                    'reporter_today_focus_label' => '記者予想 当日フォーカス',
                    'reporter_today_focus' => ['46-46=12', '注1-6=234', '穴3=46'],
                    'reporter_today_focus_exacta_label' => '記者予想 当日フォーカス 2連単',
                    'reporter_today_focus_exacta' => ['穴3=46'],
                    'reporter_today_focus_trifecta_label' => '記者予想 当日フォーカス 3連単',
                    'reporter_today_focus_trifecta' => ['46-46=12', '注1-6=234'],
                ],
            ],
        ];
    }
}
