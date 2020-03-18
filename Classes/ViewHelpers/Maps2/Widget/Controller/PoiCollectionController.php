<?php
declare(strict_types = 1);

namespace RRafalskiIt\RritMaps2Events\ViewHelpers\Maps2\Widget\Controller;

/*
 * This file is part of the maps2 project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use RRafalskiIt\RritMaps2Events\XClass\DERHANSEN\SfEventMgt\Domain\Model\Event;
use JWeiland\Maps2\Domain\Model\PoiCollection;

/**
 * A show controller for foreign extension authors
 * to show Google Maps with a fixed poi collection record
 *
 * Map2 view for Events
 *
 * @author Ayke Halder <mail@ayke-halder.de>
 * @package RritMaps2Events
 */

class PoiCollectionController extends \JWeiland\Maps2\ViewHelpers\Widget\Controller\PoiCollectionController
{
    public function indexAction()
    {
        parent::indexAction();

        if ($this->widgetConfiguration['eventsPoiCollection'] instanceof \Traversable) {
            $poiCollections = [];
            /** @var Event $event */
            foreach ($this->widgetConfiguration['eventsPoiCollection'] as $event) {
                /** @var PoiCollection $poiCollection */
                $onePoiCollection = $event->getLocation()->getTxMaps2Uid();
                $poiCollections[] = $onePoiCollection;
                $this->mapService->setInfoWindow($onePoiCollection);
            }
            $this->view->assign('poiCollections', $poiCollections);
        }
    }
}