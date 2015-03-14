<?php

namespace simonsoftware\geophp;
include_once('./geoPHPlibs/geoPHP.inc');

/**
 * This is just an example.
 */
class GeoPhp extends \yii\base\Widget
{
    public static function wkt_to_json($wkt)
    {
        $geom = geoPHP::load($wkt, 'wkt');
        return $geom->out('json');
    }

}