<?php
namespace Le2le\AliyunLog\Models;
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

class OssShipperStorage{
    private $format;

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param mixed $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }


}