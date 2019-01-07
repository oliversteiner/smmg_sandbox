<?php
/**
 * Created by PhpStorm.
 * User: ost
 * Date: 2019-01-07
 * Time: 01:26
 */

namespace Drupal\smmg_sandbox\Utility;


class Unit
{
    private $length = 0;

    /**
     * @param int $length
     */
    public function setLength(int $length)
    {
        $this->length = $length;
    }

    /**
     * @return int
     *   The length of the unit.
     */
    public function getLength()
    {
        return $this->length;
    }
}