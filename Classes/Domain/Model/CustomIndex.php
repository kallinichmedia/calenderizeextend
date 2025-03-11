<?php

declare(strict_types=1);

namespace Km\KmCalendarizeext\Domain\Model;

use HDNET\Calendarize\Domain\Model\Index;

class CustomIndex extends Index
{
    /**
     * @var bool
     */
    protected bool $kmNeu = false;

    /**
     * Get km_neu
     */
    public function getKmNeu(): bool
    {
        return $this->kmNeu;
    }

    /**
     * Set km_neu
     */
    public function setKmNeu(bool $kmNeu): void
    {
        $this->kmNeu = $kmNeu;
    }
}
