<?php

namespace Controle;
/**
 * DistanceType
 * DistanceType used in proximity search
 */
class DistanceType {
    /**
     * @var int | The measurement used in a proximity search distance calculation.
     */
    public $DistanceMeasurement;
    /**
     * @var string | The unit used in a proximity search distance calculation.
     */
    public $DistanceUnit;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}
