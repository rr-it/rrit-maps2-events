<?php

namespace RRafalskiIt\RritMaps2Events\XClass\DERHANSEN\SfEventMgt\Domain\Repository;

/**
 * Map2 view for Events
 *
 * @author Ayke Halder <mail@ayke-halder.de>
 * @package RritMaps2Events
 * @subpackage XClass\DERHANSEN\SfEventMgt
 */

class EventRepository extends \DERHANSEN\SfEventMgt\Domain\Repository\EventRepository
{
    /**
     * Sets the location constraint to the given constraints array
     *
     * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query Query
     * @param \DERHANSEN\SfEventMgt\Domain\Model\Dto\EventDemand $eventDemand EventDemand
     * @param array $constraints Constraints
     *
     * @return void
     */
    protected function setLocationConstraint($query, $eventDemand, &$constraints)
    {
        parent::setLocationConstraint($query, $eventDemand, $constraints);
        // Warnung: this test also filters results in TYPO3-BE
        $pseudoSearchRadius = 0.1;
        $constraints[] = $query->greaterThanOrEqual('location.txMaps2Uid.latitude', 48.780167 - $pseudoSearchRadius);
        $constraints[] = $query->lessThanOrEqual('location.txMaps2Uid.latitude', 48.780167 + $pseudoSearchRadius);
        $constraints[] = $query->greaterThanOrEqual('location.txMaps2Uid.longitude', 9.186586 - $pseudoSearchRadius);
        $constraints[] = $query->lessThanOrEqual('location.txMaps2Uid.longitude', 9.186586 + $pseudoSearchRadius);
    }
}