<?php

/*
+---------------------------------------------------------------------------+
| OpenX v2.6                                                                |
| ==========                                                                |
|                                                                           |
| Copyright (c) 2003-2008 OpenX Limited                                     |
| For contact details, see: http://www.openx.org/                           |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id:$
*/

/**
 * @package    OpenXDll
 * @author     Ivan Klishch <iklishch@lohika.com>
 *
 * This files describes the ZoneInfo class.
 *
 */

// Include base info class.
require_once 'Info.php';

/**
 *  The ZoneInfo class extends the base Info class and contains information about the zone.
 *
 */

class tx_OpenxDllZoneInfo extends tx_OpenxInfo
{


    /**
     * The zoneId variable is the unique ID for the zone.
     *
     * @var integer $zoneId
     */
    var $zoneId;

    /**
     * The publisherID is the ID of the publisher associated with the zone.
     *
     * @var integer $publisherId
     */
    var $publisherId;

    /**
     * The zoneName is the name of the zone.
     *
     * @var string $zoneName
     */
    var $zoneName;

    /**
     * The type variable type of zone, one of the following: banner, interstitial, popup, text, email.
     *
     * @var integer $type
     */
    var $type;

    /**
     * The width variable is the width of the zone.
     *
     * @var integer $width
     */
    var $width;

    /**
     * The height variable is the height of the zone.
     *
     * @var integer $height
     */
    var $height;


    /**
     * This functions sets all default values when adding a new zone.
     *
     */
    function setDefaultForAdd() {
        if (is_null($this->type)) {
            $this->type = 0;
        }

        if (is_null($this->width)) {
            $this->width = 0;
        }

        if (is_null($this->height)) {
            $this->height = 0;
        }
    }

    function getFieldsTypes()
    {
        return array(
                    'zoneId' => 'integer',
                    'publisherId' => 'integer',
                    'zoneName' => 'string',
                    'type' => 'integer',
                    'width' => 'integer',
                    'height' => 'integer'
                );
    }
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/openx/api/ZoneInfo.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/openx/api/ZoneInfo.php']);
}
?>