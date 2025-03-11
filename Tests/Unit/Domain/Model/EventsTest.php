<?php

declare(strict_types=1);

namespace Km\KmCalendarizeext\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class EventsTest extends UnitTestCase
{
    /**
     * @var \Km\KmCalendarizeext\Domain\Model\Events|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Km\KmCalendarizeext\Domain\Model\Events::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNewReturnsInitialValueForBool(): void
    {
        self::assertFalse($this->subject->getNew());
    }

    /**
     * @test
     */
    public function setNewForBoolSetsNew(): void
    {
        $this->subject->setNew(true);

        self::assertEquals(true, $this->subject->_get('new'));
    }

    /**
     * @test
     */
    public function getEventtypeReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getEventtype()
        );
    }

    /**
     * @test
     */
    public function setEventtypeForIntSetsEventtype(): void
    {
        $this->subject->setEventtype(12);

        self::assertEquals(12, $this->subject->_get('eventtype'));
    }

    /**
     * @test
     */
    public function getQundisLocationReturnsInitialValueForBool(): void
    {
        self::assertFalse($this->subject->getQundisLocation());
    }

    /**
     * @test
     */
    public function setQundisLocationForBoolSetsQundisLocation(): void
    {
        $this->subject->setQundisLocation(true);

        self::assertEquals(true, $this->subject->_get('qundisLocation'));
    }

    /**
     * @test
     */
    public function getFeeReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getFee()
        );
    }

    /**
     * @test
     */
    public function setFeeForIntSetsFee(): void
    {
        $this->subject->setFee(12);

        self::assertEquals(12, $this->subject->_get('fee'));
    }

    /**
     * @test
     */
    public function getCostspernightReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getCostspernight()
        );
    }

    /**
     * @test
     */
    public function setCostspernightForIntSetsCostspernight(): void
    {
        $this->subject->setCostspernight(12);

        self::assertEquals(12, $this->subject->_get('costspernight'));
    }

    /**
     * @test
     */
    public function getLocationTextReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getLocationText()
        );
    }

    /**
     * @test
     */
    public function setLocationTextForStringSetsLocationText(): void
    {
        $this->subject->setLocationText('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('locationText'));
    }

    /**
     * @test
     */
    public function getTargetgroupReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTargetgroup()
        );
    }

    /**
     * @test
     */
    public function setTargetgroupForStringSetsTargetgroup(): void
    {
        $this->subject->setTargetgroup('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('targetgroup'));
    }

    /**
     * @test
     */
    public function getShowRequirementsReturnsInitialValueForBool(): void
    {
        self::assertFalse($this->subject->getShowRequirements());
    }

    /**
     * @test
     */
    public function setShowRequirementsForBoolSetsShowRequirements(): void
    {
        $this->subject->setShowRequirements(true);

        self::assertEquals(true, $this->subject->_get('showRequirements'));
    }

    /**
     * @test
     */
    public function getRequirmentsReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getRequirments()
        );
    }

    /**
     * @test
     */
    public function setRequirmentsForStringSetsRequirments(): void
    {
        $this->subject->setRequirments('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('requirments'));
    }

    /**
     * @test
     */
    public function getOvernightstaysReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getOvernightstays()
        );
    }

    /**
     * @test
     */
    public function setOvernightstaysForIntSetsOvernightstays(): void
    {
        $this->subject->setOvernightstays(12);

        self::assertEquals(12, $this->subject->_get('overnightstays'));
    }

    /**
     * @test
     */
    public function getSemesterReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getSemester()
        );
    }

    /**
     * @test
     */
    public function setSemesterForIntSetsSemester(): void
    {
        $this->subject->setSemester(12);

        self::assertEquals(12, $this->subject->_get('semester'));
    }
}
