<?php

declare(strict_types=1);

namespace Km\KmCalendarizeext\Domain\Model;

use HDNET\Calendarize\Domain\Model\Event as BaseEvent;

class Event extends BaseEvent
{
    protected bool $new = false;
    protected bool $request = false;
    protected int $eventtype = 0;
    protected int $eventform = 0;
    protected bool $qundisLocation = false;
    protected int $fee = 0;
    protected ?int $costspernight = null;
    protected string $locationText = '';
    protected string $targetgroup = '';
    protected bool $showRequirements = false;
    protected string $requirments = '';
    protected int $overnightstays = 0;
    protected int $maxpersons = 0;
    protected int $semester = 0;

    public function getCostspernight(): ?int
    {
        return $this->costspernight;
    }

    public function setCostspernight(?int $costspernight): void
    {
        $this->costspernight = $costspernight;
    }

    public function getEventtype(): int
    {
        return $this->eventtype;
    }

    public function setEventtype(int $eventtype): void
    {
        $this->eventtype = $eventtype;
    }

    public function getEventform(): int
    {
        return $this->eventform;
    }

    public function setEventform(int $eventform): void
    {
        $this->eventform = $eventform;
    }

    public function getFee(): int
    {
        return $this->fee;
    }

    public function setFee(int $fee): void
    {
        $this->fee = $fee;
    }

    public function isQundisLocation(): bool
    {
        return $this->qundisLocation;
    }

    public function setQundisLocation(bool $qundisLocation): void
    {
        $this->qundisLocation = $qundisLocation;
    }

    public function getLocationText(): string
    {
        return $this->locationText;
    }

    public function setLocationText(string $locationText): void
    {
        $this->locationText = $locationText;
    }

    public function getTargetgroup(): string
    {
        return $this->targetgroup;
    }

    public function setTargetgroup(string $targetgroup): void
    {
        $this->targetgroup = $targetgroup;
    }

    public function isShowRequirements(): bool
    {
        return $this->showRequirements;
    }

    public function setShowRequirements(bool $showRequirements): void
    {
        $this->showRequirements = $showRequirements;
    }

    public function getRequirments(): string
    {
        return $this->requirments;
    }

    public function setRequirments(string $requirments): void
    {
        $this->requirments = $requirments;
    }

    public function getOvernightstays(): int
    {
        return $this->overnightstays;
    }

    public function setOvernightstays(int $overnightstays): void
    {
        $this->overnightstays = $overnightstays;
    }

    public function getMaxpersons(): int
    {
        return $this->maxpersons;
    }

    public function setMaxpersons(int $maxpersons): void
    {
        $this->maxpersons = $maxpersons;
    }

    public function getSemester(): int
    {
        return $this->semester;
    }

    public function setSemester(int $semester): void
    {
        $this->semester = $semester;
    }

    public function isNew(): bool
    {
        return $this->new;
    }

    public function setNew(bool $new): void
    {
        $this->new = $new;
    }

    public function isRequest(): bool
    {
        return $this->request;
    }

    public function setRequest(bool $request): void
    {
        $this->request = $request;
    }
}
