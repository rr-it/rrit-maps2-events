<?php

namespace RRafalskiIt\RritMaps2Events\XClass\DERHANSEN\SfEventMgt\Domain\Model;

/**
 * Map2 view for Events
 *
 * @author Ayke Halder <mail@ayke-halder.de>
 * @package RritMaps2Events
 * @subpackage XClass\DERHANSEN\SfEventMgt
 */

class Location extends \DERHANSEN\SfEventMgt\Domain\Model\Location
{
    /**
     * The Maps2 PoiCollection
     *
     * @var \JWeiland\Maps2\Domain\Model\PoiCollection
     */
    protected $txMaps2Uid = null;

    /**
     * Sets the location
     *
     * @param \JWeiland\Maps2\Domain\Model\PoiCollection $poiCollection PoiCollection
     *
     * @return void
     */
    public function setTxMaps2Uid($poiCollection)
    {
        $this->txMaps2Uid = $poiCollection;
    }

    /**
     * Returns the location
     *
     * @return \JWeiland\Maps2\Domain\Model\PoiCollection
     */
    public function getTxMaps2Uid()
    {
        return $this->txMaps2Uid;
    }
}