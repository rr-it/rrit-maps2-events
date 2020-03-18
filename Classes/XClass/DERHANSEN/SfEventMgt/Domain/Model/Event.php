<?php

namespace RRafalskiIt\RritMaps2Events\XClass\DERHANSEN\SfEventMgt\Domain\Model;

/**
 * Map2 view for Events
 *
 * @author Ayke Halder <mail@ayke-halder.de>
 * @package RritMaps2Events
 * @subpackage XClass\DERHANSEN\SfEventMgt
 */

class Event extends \DERHANSEN\SfEventMgt\Domain\Model\Event
{
    /**
     * The Location
     *
     * @var \RRafalskiIt\RritMaps2Events\XClass\DERHANSEN\SfEventMgt\Domain\Model\Location
     */
    protected $location = null;

    /**
     * Sets the location
     *
     * @param \RRafalskiIt\RritMaps2Events\XClass\DERHANSEN\SfEventMgt\Domain\Model\Location $location Location
     *
     * @return void
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Returns the location
     *
     * @return \RRafalskiIt\RritMaps2Events\XClass\DERHANSEN\SfEventMgt\Domain\Model\Location
     */
    public function getLocation()
    {
        return $this->location;
    }
}