<?php

declare(strict_types=1);

namespace Km\KmCalendarizeext\Domain\Repository;

use HDNET\Calendarize\Domain\Repository\IndexRepository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;

class CustomIndexRepository extends IndexRepository
{
    public function findAllWithKmNeu()
    {
        $query = $this->createQuery();
        $query->matching($query->equals('kmNeu', 1));  // Example query to filter by kmNeu
        $result = $query->execute();

        \TYPO3\CMS\Core\Utility\DebugUtility::debug($result); // Debug output

        return $result;
    }
}
