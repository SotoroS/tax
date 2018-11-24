<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 24.11.2018
 * Time: 14:08
 */

class herelib
{

    public function getRouteByDoublePoint($a, $b)
    {
        return file_get_contents(
            'https://route.api.here.com/routing/7.2/calculateroute.json?' .
            'waypoint0=' . $a['x'] . '%' . $a['y'] .
            '&waypoint1=' . $b['x'] . '%' . $b['y'] .
            '&mode=' . 'mode=fastest%3Bcar%3Btraffic%3Aenabled' .
            '&app_id=' . 'devportal-demo-20180625' .
            '&app_code=' . '9v2BkviRwi9Ot26kp2IysQ'
        );

    }

}