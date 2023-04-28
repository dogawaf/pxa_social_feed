<?php

namespace Pixelant\PxaSocialFeed\Tests\Unit\Feed;

use Nimut\TestingFramework\TestCase\UnitTestCase;
use Pixelant\PxaSocialFeed\Domain\Model\Configuration;
use Pixelant\PxaSocialFeed\Feed\Source\TwitterSource;
use Pixelant\PxaSocialFeed\Feed\TwitterFactory;
use Pixelant\PxaSocialFeed\Feed\Update\TwitterFeedUpdater;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class FacebookFeedFactoryTest
 * @package Pixelant\PxaSocialFeed\Tests\Unit\Feed
 */
class TwitterFactoryTest extends UnitTestCase
{
    /**
     * @var TwitterFactory
     */
    protected $subject = null;

    protected function setUp(): void
    {
        $this->subject = $this->createMock(TwitterFactory::class);
    }

    protected function tearDown(): void
    {
        unset($this->subject);
    }

    /**
     * @test
     */
    public function getFeedSourceReturnTwitterSource()
    {
        self::assertInstanceOf(TwitterSource::class, $this->subject->getFeedSource(new Configuration()));
    }

    /**
     * @test
     */
    public function getFeedUpdaterReturnTwitterUpdater()
    {
        self::assertInstanceOf(TwitterFeedUpdater::class, $this->subject->getFeedUpdater());
    }
}
