<?php

declare(strict_types=1);

namespace BVP\KiryuScraper;

use BVP\KiryuScraper\Scrapers\CommentScraper;
use BVP\KiryuScraper\Scrapers\ForecastScraper;
use BVP\KiryuScraper\Scrapers\TimeScraper;
use Carbon\CarbonInterface;

/**
 * @author shimomo
 */
class ScraperCore implements ScraperCoreInterface
{
    /**
     * @var array
     */
    private array $instances = [];

    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return never
     *
     * @throws \BadMethodCallException
     */
    public function __call(string $name, array $arguments): never
    {
        throw new \BadMethodCallException(
            __METHOD__ . "() - Call to undefined method '" . self::class . "::{$name}()'."
        );
    }

    /**
     * @param  string|int                           $raceNumber
     * @param  \Carbon\CarbonInterface|string|null  $date
     * @return array
     */
    public function scrapeComments(string|int $raceNumber, CarbonInterface|string|null $date = null): array
    {
        return ($this->instances['CommentScraper'] ??= new CommentScraper())->scrape($raceNumber, $date);
    }

    /**
     * @param  string|int                           $raceNumber
     * @param  \Carbon\CarbonInterface|string|null  $date
     * @return array
     */
    public function scrapeForecasts(string|int $raceNumber, CarbonInterface|string|null $date = null): array
    {
        return ($this->instances['ForecastScraper'] ??= new ForecastScraper())->scrape($raceNumber, $date);
    }

    /**
     * @param  string|int                           $raceNumber
     * @param  \Carbon\CarbonInterface|string|null  $date
     * @return array
     */
    public function scrapeTimes(string|int $raceNumber, CarbonInterface|string|null $date = null): array
    {
        return ($this->instances['TimeScraper'] ??= new TimeScraper())->scrape($raceNumber, $date);
    }
}
