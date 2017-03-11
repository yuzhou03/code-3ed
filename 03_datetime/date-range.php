<?php
/**
 * Created by PhpStorm.
 * User: zhouyu
 * Date: 2017/3/11
 * Time: 10:53
 */

/**
 * @param $start
 * @param $end
 * @return array
 */
function get_date_range($start, $end)
{
    $period = new DatePeriod(
        new DateTime($start),
        new DateInterval('P1D'),
        new DateTime($end)
    );

    $dates = array();
    foreach ($period as $datetime) {
        $dates[] = $datetime->format('Ymd');
    }
    return $dates;
}

var_dump(get_date_range('2017-02-26', '2017-03-05'));