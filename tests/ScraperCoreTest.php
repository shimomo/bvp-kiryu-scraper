<?php

declare(strict_types=1);

namespace BVP\KiryuScraper\Tests;

use BVP\KiryuScraper\ScraperCore;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class ScraperCoreTest extends TestCase
{
    /**
     * @var \BVP\KiryuScraper\ScraperCore
     */
    protected ScraperCore $scraper;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->scraper = new ScraperCore();
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperCoreDataProvider::class, 'scrapeForecastsProvider')]
    public function testScrapeForecasts(array $arguments, array $expected): void
    {
        $this->assertSame($expected, $this->scraper->scrapeForecasts(...$arguments));
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperCoreDataProvider::class, 'scrapeTimesProvider')]
    public function testScrapeTimes(array $arguments, array $expected): void
    {
        $this->assertSame($expected, $this->scraper->scrapeTimes(...$arguments));
    }

    /**
     * @return void
     */
    public function testScrapeCommentsWithRaceCode1AndDate20240108(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\KiryuScraper\Scrapers\CommentScraper::scrape() - " .
            "The 'scrape' feature is currently not implemented."
        );

        $this->scraper->scrapeComments(1, '2024-01-08');
    }

    /**
     * @return void
     */
    public function testScrapeForecastsWithRaceCode1AndDate20240108(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\KiryuScraper\Scrapers\ForecastScraper::scrapeYesterday() - " .
            "The specified key '.kind-comment' is not found in the content of the URL: " .
            "'http://www.kiryu-kyotei.com/modules/yosou/syussou.php?day=20240108&race=1'."
        );

        $this->scraper->scrapeForecasts(1, '2024-01-08');
    }

    /**
     * @return void
     */
    public function testScrapeTimesWithRaceCode1AndDate20240108(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\KiryuScraper\Scrapers\TimeScraper::scrape() - " .
            "The specified key '.com-rname' is not found in the content of the URL: " .
            "'http://www.kiryu-kyotei.com/modules/yosou/cyokuzen.php?day=20240108&race=1'."
        );

        $this->scraper->scrapeTimes(1, '2024-01-08');
    }

    /**
     * @return void
     */
    public function testInvalidWithRaceCode1AndDate20240108(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\KiryuScraper\ScraperCore::__call() - " .
            "Call to undefined method 'BVP\KiryuScraper\ScraperCore::invalid()'."
        );

        $this->scraper->invalid(1, '2024-01-08');
    }
}
