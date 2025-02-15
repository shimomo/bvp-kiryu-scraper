<?php

declare(strict_types=1);

namespace BVP\KiryuScraper;

/**
 * @author shimomo
 */
interface ScraperInterface extends ScraperContractInterface
{
    /**
     * @param  \BVP\KiryuScraper\ScraperCoreInterface
     * @return \BVP\KiryuScraper\ScraperInterface
     */
    public static function getInstance(?ScraperCoreInterface $scraperCore = null): ScraperInterface;

    /**
     * @param  \BVP\KiryuScraper\ScraperCoreInterface
     * @return \BVP\KiryuScraper\ScraperInterface
     */
    public static function createInstance(?ScraperCoreInterface $scraperCore = null): ScraperInterface;

    /**
     * @return void
     */
    public static function resetInstance(): void;
}
