<?php

declare(strict_types=1);

namespace BVP\KiryuScraper\Tests;

use BVP\KiryuScraper\Scraper;
use BVP\KiryuScraper\ScraperInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class ScraperTest extends TestCase
{
    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperDataProvider::class, 'scrapeForecastsProvider')]
    public function testScrapeForecasts(array $arguments, array $expected): void
    {
        $this->assertSame($expected, Scraper::scrapeForecasts(...$arguments));
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperDataProvider::class, 'scrapeTimesProvider')]
    public function testScrapeTimes(array $arguments, array $expected): void
    {
        $this->assertSame($expected, Scraper::scrapeTimes(...$arguments));
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

        Scraper::scrapeComments(1, '2024-01-08');
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

        Scraper::scrapeForecasts(1, '2024-01-08');
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

        Scraper::scrapeTimes(1, '2024-01-08');
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

        Scraper::invalid(1, '2024-01-08');
    }

    /**
     * @return void
     */
    public function testGetInstance(): void
    {
        Scraper::resetInstance();
        $this->assertInstanceOf(ScraperInterface::class, Scraper::getInstance());
    }

    /**
     * @return void
     */
    public function testCreateInstance(): void
    {
        Scraper::resetInstance();
        $this->assertInstanceOf(ScraperInterface::class, Scraper::createInstance());
    }

    /**
     * @return void
     */
    public function testResetInstance(): void
    {
        Scraper::resetInstance();
        $instance1 = Scraper::getInstance();
        Scraper::resetInstance();
        $instance2 = Scraper::getInstance();
        $this->assertNotSame($instance1, $instance2);
    }
}
