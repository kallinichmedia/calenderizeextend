<?php


namespace Km\KmCalendarizeext\Domain\Model;


/**
 * This file is part of the "Extend Calendarize" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 
 */

/**
 * Events
 */
class Event extends \HDNET\Calendarize\Domain\Model\Event
{

    /**
     * new
     *
     * @var bool
     */
    protected $new = false;

    /**
     * request
     *
     * @var bool
     */
    protected $request = false;

    /**
     * eventtype
     *
     * @var int
     */
    protected $eventtype = 0;

    /**
     * eventform
     *
     * @var int
     */
    protected $eventform = 0;

    /**
     * location
     *
     * @var bool
     */
    protected $qundisLocation = false;

    /**
     * fee
     *
     * @var int
     */
    protected $fee = 0;

    /**
     * costspernight
     *
     * @var int
     */
    protected $costspernight = null;

    /**
     * locationText
     *
     * @var string
     */
    protected $locationText = '';

    /**
     * targetgroup
     *
     * @var string
     */
    protected $targetgroup = '';

    /**
     * showRequirements
     *
     * @var bool
     */
    protected $showRequirements = false;

    /**
     * requirments
     *
     * @var string
     */
    protected $requirments = '';

    /**
     * overnightstays
     *
     * @var int
     */
    protected $overnightstays = 0;

    /**
     * maxpersons
     *
     * @var int
     */
    protected $maxpersons = 0;

    /**
     * semester
     *
     * @var int
     */
    protected $semester = 0;

    /**
     * Returns the costspernight
     *
     * @return int
     */
    public function getCostspernight()
    {
        return $this->costspernight;
    }

    /**
     * Sets the costspernight
     *
     * @param int $costspernight
     * @return void
     */
    public function setCostspernight(int $costspernight)
    {
        $this->costspernight = $costspernight;
    }




    /**
     * Returns the eventtype
     *
     * @return int
     */
    public function getEventtype()
    {
        return $this->eventtype;
    }

    /**
     * Sets the eventtype
     *
     * @param int $eventtype
     * @return void
     */
    public function setEventtype(int $eventtype)
    {
        $this->eventtype = $eventtype;
    }

    /**
     * Returns the eventform
     *
     * @return int
     */

    public function getEventform()
    {
        return $this->eventform;
    }

    /**
     * Sets the eventform
     *
     * @param int $eventform
     * @return void
     */

    public function setEventform(int $eventform)
    {
        $this->eventform = $eventform;
    }

    /**
     * Returns the fee
     *
     * @return int
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets the fee
     *
     * @param int $fee
     * @return void
     */
    public function setFee(int $fee)
    {
        $this->fee = $fee;
    }

    /**
     * Returns the location
     *
     * @return bool
     */
    public function getQundisLocation()
    {
        return $this->qundisLocation;
    }

    /**
     * Sets the location
     *
     * @param bool $location
     * @return void
     */
    public function setQundisLocation(bool $qundisLocation)
    {
        $this->qundisLocation = $QundisLocation;
    }

    /**
     * Returns the boolean state of location
     *
     * @return bool
     */
    public function isQundisLocation()
    {
        return $this->qundisLocation;
    }

    /**
     * Returns the locationText
     *
     * @return string
     */
    public function getQundisLocationText()
    {
        return $this->locationText;
    }

    /**
     * Sets the locationText
     *
     * @param string $locationText
     * @return void
     */
    public function setLocationText(string $locationText)
    {
        $this->locationText = $locationText;
    }

    /**
     * Returns the targetgroup
     *
     * @return string
     */
    public function getTargetgroup()
    {
        return $this->targetgroup;
    }

    /**
     * Sets the targetgroup
     *
     * @param string $targetgroup
     * @return void
     */
    public function setTargetgroup(string $targetgroup)
    {
        $this->targetgroup = $targetgroup;
    }

    /**
     * Returns the showRequirements
     *
     * @return bool
     */
    public function getShowRequirements()
    {
        return $this->showRequirements;
    }

    /**
     * Sets the showRequirements
     *
     * @param bool $showRequirements
     * @return void
     */
    public function setShowRequirements(bool $showRequirements)
    {
        $this->showRequirements = $showRequirements;
    }

    /**
     * Returns the boolean state of showRequirements
     *
     * @return bool
     */
    public function isShowRequirements()
    {
        return $this->showRequirements;
    }

    /**
     * Returns the requirments
     *
     * @return string
     */
    public function getRequirments()
    {
        return $this->requirments;
    }

    /**
     * Sets the requirments
     *
     * @param string $requirments
     * @return void
     */
    public function setRequirments(string $requirments)
    {
        $this->requirments = $requirments;
    }

    /**
     * Returns the overnightstays
     *
     * @return int
     */
    public function getOvernightstays()
    {
        return $this->overnightstays;
    }

    /**
     * Sets the overnightstays
     *
     * @param int $overnightstays
     * @return void
     */
    public function setOvernightstays(int $overnightstays)
    {
        $this->overnightstays = $overnightstays;
    }

    /**
     * Returns the maxpersons
     *
     * @return int
     */
    public function getMaxpersons()
    {
        return $this->maxpersons;
    }

    /**
     * Sets the maxpersons
     *maxpersons
     * @param int $overnightstays
     * @return void
     */
    public function setMaxpersons(int $maxpersons)
    {
        $this->overnightstays = $maxpersons;
    }

    /**
     * Returns the semester
     *
     * @return int
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * Sets the semester
     *
     * @param int $semester
     * @return void
     */
    public function setSemester(int $semester)
    {
        $this->semester = $semester;
    }

    /**
     * Returns the new
     *
     * @return bool
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * Sets the new
     *
     * @param bool $new
     * @return void
     */
    public function setNew(bool $new)
    {
        $this->new = $new;
    }

    /**
     * Returns the boolean state of new
     *
     * @return bool
     */
    public function isNew()
    {
        return $this->new;
    }


    /**
    * Returns the request
    *
    * @return bool
    */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the request
     *
     * @param bool $request
     * @return void
     */
    public function setRequest(bool $request)
    {
        $this->request = $request;
    }

    /**
     * Returns the boolean state of request
     *
     * @return bool
     */
    public function isRequest()
    {
        return $this->request;
    }


}


