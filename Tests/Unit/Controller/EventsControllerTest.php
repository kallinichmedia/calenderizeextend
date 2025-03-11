<?php

declare(strict_types=1);

namespace Km\KmCalendarizeext\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 */
class EventsControllerTest extends UnitTestCase
{
    /**
     * @var \Km\KmCalendarizeext\Controller\EventsController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Km\KmCalendarizeext\Controller\EventsController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenEventsToView(): void
    {
        $events = new \Km\KmCalendarizeext\Domain\Model\Events();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('events', $events);

        $this->subject->editAction($events);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenEventsInEventsRepository(): void
    {
        $events = new \Km\KmCalendarizeext\Domain\Model\Events();

        $eventsRepository = $this->getMockBuilder(\::class)
            ->onlyMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $eventsRepository->expects(self::once())->method('update')->with($events);
        $this->subject->_set('eventsRepository', $eventsRepository);

        $this->subject->updateAction($events);
    }
}
