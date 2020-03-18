<?php

namespace RRafalskiIt\RritMaps2Events\XClass\DERHANSEN\SfEventMgt\Controller;

/**
 * Map2 view for Events
 *
 * @author Ayke Halder <mail@ayke-halder.de>
 * @package RritMaps2Events
 * @subpackage XClass\DERHANSEN\SfEventMgt
 */

class EventController extends \DERHANSEN\SfEventMgt\Controller\EventController
{
    /**
     * Map view
     *
     * based on List view / listAction
     *
     * @param array $overwriteDemand OverwriteDemand
     *
     * @return void
     */
    public function listAction(array $overwriteDemand = [])
    {
        $eventDemand = $this->createEventDemandObjectFromSettings($this->settings);
        $foreignRecordDemand = $this->createForeignRecordDemandObjectFromSettings($this->settings);
        $categoryDemand = $this->createCategoryDemandObjectFromSettings($this->settings);
        if ($this->isOverwriteDemand($overwriteDemand)) {
            $eventDemand = $this->overwriteEventDemandObject($eventDemand, $overwriteDemand);
        }
        $events = $this->eventRepository->findDemanded($eventDemand);
        $categories = $this->categoryRepository->findDemanded($categoryDemand);
        $locations = $this->locationRepository->findDemanded($foreignRecordDemand);
        $organisators = $this->organisatorRepository->findDemanded($foreignRecordDemand);
        $speakers = $this->speakerRepository->findDemanded($foreignRecordDemand);

        $values = [
            'events' => $events,
            'categories' => $categories,
            'locations' => $locations,
            'organisators' => $organisators,
            'speakers' => $speakers,
            'overwriteDemand' => $overwriteDemand,
            'eventDemand' => $eventDemand
        ];

        $this->signalDispatch(__CLASS__, __FUNCTION__ . 'BeforeRenderView', [&$values, $this]);
        $this->view->assignMultiple($values);

        $this->eventCacheService->addPageCacheTagsByEventDemandObject($eventDemand);
    }
}