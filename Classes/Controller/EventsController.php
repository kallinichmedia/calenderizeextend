<?php

declare(strict_types=1);

namespace Km\KmCalendarizeext\Controller;


/**
 * This file is part of the "Extend Calendarize" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 
 */

/**
 * EventController
 */
class EventsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action edit
     *
     * @param \Km\KmCalendarizeext\Domain\Model\Event $event
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("event")
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function editAction(\Km\KmCalendarizeext\Domain\Model\Event $event): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('event', $event);
        return $this->htmlResponse();
    }

    /**
     * action update
     *
     * @param \Km\KmCalendarizeext\Domain\Model\Event $events
     */
    public function updateAction(\Km\KmCalendarizeext\Domain\Model\Event $event)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->eventsRepository->update($event);
        $this->redirect('list');
    }
}
