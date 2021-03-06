<?php
namespace Le2le\AliyunLog\Models;
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

/**
 * LogItem used to present a log, it contains log time and multiple
 * key/value pairs to present the log contents.
 *
 * @author log service dev
 */
class LogItem {
    
    /**
     * @var int time of the log item, the default time if the now time.
     */
    private $time;

    /**
     * @var array the data of the log item, including many key/value pairs.
     */
    private $contents;
    
    /**
     * LogItem cnostructor
     *
     * @param array $contents
     *            the data of the log item, including many key/value pairs.
     * @param  int  $time
     *            time of the log item, the default time if the now time.
     */
    public function __construct($time = null, $contents = null) {
        if (! $time)
            $time = time ();
        $this->time = $time;
        if ($contents)
            $this->contents = $contents;
        else
            $this->contents = array ();
    }
    
    /**
     * Get log time
     *
     * @return int log time
     */
    public function getTime() {
        return $this->time;
    }
    
    /**
     * Set log time
     *
     * @param  int  $time
     *            log time
     */
    public function setTime($time) {
        $this->time = $time;
    }
    
    /**
     * Get log contents
     *
     * @return array log contents
     */
    public function getContents() {
        return $this->contents;
    }
    
    /**
     * Set log contents
     *
     * @param array $contents
     *            log contents
     */
    public function setContents($contents) {
        $this->contents = $contents;
    }
    
    /**
     * Add a key/value pair as log content to the log
     *
     * @param string $key
     *            log content key
     * @param string $value
     *            log content value
     */
    public function pushBack($key, $value) {
        $this->contents [$key] = $value;
    }
}
