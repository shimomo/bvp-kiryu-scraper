<?php

declare(strict_types=1);

namespace BVP\KiryuScraper\Scrapers;

use BVP\ScraperCore\Normalizer;
use BVP\ScraperCore\Scraper;
use BVP\Trimmer\Trimmer;
use Carbon\CarbonImmutable as Carbon;
use Carbon\CarbonInterface;
use Symfony\Component\DomCrawler\Crawler;

/**
 * @author shimomo
 */
class ForecastScraper extends BaseScraper
{
    /**
     * @param  string|int                           $raceCode
     * @param  \Carbon\CarbonInterface|string|null  $date
     * @return array
     */
    public function scrape(string|int $raceCode, CarbonInterface|string|null $date = null): array
    {
        return array_merge(...[
            $this->scrapeYesterday($raceCode, $date),
            $this->scrapeToday($raceCode, $date),
        ]);
    }

    /**
     * @param  string|int                           $raceCode
     * @param  \Carbon\CarbonInterface|string|null  $date
     * @return array
     *
     * @throws \RuntimeException
     */
    private function scrapeYesterday(string|int $raceCode, CarbonInterface|string|null $date = null): array
    {
        $date = Carbon::parse($date ?? 'today')->format('Ymd');
        $crawlerUrl = sprintf($this->baseUrl, 'syussou', $date, $raceCode);
        $crawler = Scraper::getInstance()->request('GET', $crawlerUrl);
        $forecasts = Scraper::filterByKeys($crawler, [
            '.kind-shinnyu',
            '.kind-comment',
            '.focus-block.left > dd',
            '.focus-block.right > dd',
        ]);

        foreach ($forecasts as $key => $value) {
            if (empty($value)) {
                throw new \RuntimeException(
                    __METHOD__ . "() - The specified key '{$key}' is not found " .
                    "in the content of the URL: '{$crawlerUrl}'."
                );
            }
        }

        $exactaFocuses = Normalizer::normalize($forecasts['.focus-block.left > dd']);
        $exactaSeparators = $this->filterSeparatorsByKey($crawler, '.focus-block.left > dd > .symbol_img');
        $reporterYesterdayFocusExacta = array_map(function ($focus, $separator) {
            return substr_replace($focus, $separator, 1, 0);
        }, $exactaFocuses, $exactaSeparators);

        $trifectaFocuses = Normalizer::normalize($forecasts['.focus-block.right > dd']);
        $trifectaSeparators = $this->filterSeparatorsByKey($crawler, '.focus-block.right > dd > .symbol_img');
        $trifectaSeparators = array_chunk($trifectaSeparators, 2);
        $reporterYesterdayFocusTrifecta = array_map(function ($focus, $separator) {
            return substr_replace(substr_replace($focus, $separator[0], 1, 0), $separator[1], 3, 0);
        }, $trifectaFocuses, $trifectaSeparators);

        $reporterYesterdayCourseLabel = '記者予想 前日コース';
        $reporterYesterdayCommentLabel = '記者予想 前日コメント';
        $reporterYesterdayFocusLabel = '記者予想 前日フォーカス';
        $reporterYesterdayFocusExactaLabel = '記者予想 前日フォーカス 2連単';
        $reporterYesterdayFocusTrifectaLabel = '記者予想 前日フォーカス 3連単';

        $reporterYesterdayCourse = Normalizer::normalize($forecasts['.kind-shinnyu'][1]);
        $reporterYesterdayCourse = Trimmer::rtrim($reporterYesterdayCourse, 'インアウト');
        $reporterYesterdayComment = Normalizer::normalize($forecasts['.kind-comment'][1]);
        $reporterYesterdayFocus = array_merge($reporterYesterdayFocusExacta, $reporterYesterdayFocusTrifecta);

        return [
            'reporter_yesterday_course_label' => $reporterYesterdayCourseLabel,
            'reporter_yesterday_course' => $reporterYesterdayCourse,
            'reporter_yesterday_comment_label' => $reporterYesterdayCommentLabel,
            'reporter_yesterday_comment' => $reporterYesterdayComment,
            'reporter_yesterday_focus_label' => $reporterYesterdayFocusLabel,
            'reporter_yesterday_focus' => $reporterYesterdayFocus,
            'reporter_yesterday_focus_exacta_label' => $reporterYesterdayFocusExactaLabel,
            'reporter_yesterday_focus_exacta' => $reporterYesterdayFocusExacta,
            'reporter_yesterday_focus_trifecta_label' => $reporterYesterdayFocusTrifectaLabel,
            'reporter_yesterday_focus_trifecta' => $reporterYesterdayFocusTrifecta,
        ];
    }

    /**
     * @param  string|int                           $raceCode
     * @param  \Carbon\CarbonInterface|string|null  $date
     * @return array
     *
     * @throws \RuntimeException
     */
    private function scrapeToday(string|int $raceCode, CarbonInterface|string|null $date = null): array
    {
        $date = Carbon::parse($date ?? 'today')->format('Ymd');
        $crawlerUrl = sprintf($this->baseUrl, 'cyokuzen', $date, $raceCode);
        $crawler = Scraper::getInstance()->request('GET', $crawlerUrl);
        $forecasts = Scraper::filterByKeys($crawler, [
            '.com-yosou-table.forecast > tbody',
        ]);

        foreach ($forecasts as $key => $value) {
            if (empty($value)) {
                throw new \RuntimeException(
                    __METHOD__ . "() - The specified key '{$key}' is not found " .
                    "in the content of the URL: '{$crawlerUrl}'."
                );
            }
        }

        $reporterTodayCommentLabel = '記者予想 当日コメント';
        $reporterTodayFocusLabel = '記者予想 当日フォーカス';
        $reporterTodayFocusExactaLabel = '記者予想 当日フォーカス 2連単';
        $reporterTodayFocusTrifectaLabel = '記者予想 当日フォーカス 3連単';

        $reporterTodayComment = Normalizer::normalize($forecasts['.com-yosou-table.forecast > tbody'][0]);
        $reporterTodayFocus = [];
        if (preg_match('/(.+?)\s+([1-6全流]+[-=][1-6全流]+.*)/u', $reporterTodayComment, $matches)) {
            $reporterTodayComment = Trimmer::trim($matches[1]);
            $reporterTodayFocus = Trimmer::trim(explode(' ', $matches[2]));
        }

        $reporterTodayFocusExacta = array_values(array_filter($reporterTodayFocus, function ($focus) {
            return (substr_count($focus, '-') + substr_count($focus, '=')) === 1;
        }));

        $reporterTodayFocusTrifecta = array_values(array_filter($reporterTodayFocus, function ($focus) {
            return (substr_count($focus, '-') + substr_count($focus, '=')) === 2;
        }));

        return [
            'reporter_today_comment_label' => $reporterTodayCommentLabel,
            'reporter_today_comment' => $reporterTodayComment,
            'reporter_today_focus_label' => $reporterTodayFocusLabel,
            'reporter_today_focus' => $reporterTodayFocus,
            'reporter_today_focus_exacta_label' => $reporterTodayFocusExactaLabel,
            'reporter_today_focus_exacta' => $reporterTodayFocusExacta,
            'reporter_today_focus_trifecta_label' => $reporterTodayFocusTrifectaLabel,
            'reporter_today_focus_trifecta' => $reporterTodayFocusTrifecta,
        ];
    }

    /**
     * @param  \Symfony\Component\DomCrawler\Crawler  $crawler
     * @param  string                                 $key
     * @return array
     *
     * @throws \RuntimeException
     */
    private function filterSeparatorsByKey(Crawler $crawler, string $key): array
    {
        return $crawler->filter($key)->each(function ($node) use ($crawler, $key) {
            if (strpos($node->attr('src'), 'hyphen') !== false) {
                return '-';
            }

            if (strpos($node->attr('src'), 'equal') !== false) {
                return '=';
            }

            throw new \RuntimeException(
                self::class . "::filterSeparatorsByKey() - The specified key '{$key}' is not found " .
                "in the content of the URL: '" . $crawler->getUri() . "'."
            );
        });
    }
}
