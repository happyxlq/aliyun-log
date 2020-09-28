<?php
namespace Le2le\AliyunLog\Models\Request;




/**
 * 
 *
 * @author log service dev
 */
class DeleteShardRequest extends Request {

    private $logstore;

    /**
     * DeleteShardRequest Constructor
     *
     */
    public function __construct($project,$logstore,$shardId) {
        parent::__construct ( $project );
        $this->logstore = $logstore;
        $this->shardId = $shardId;
    }

    public function getLogstore(){
      return $this->logstore;
    }

    public function setLogstore($logstore){
      $this->logstore = $logstore;
    }

    public function getShardId(){
        return $this->shardId;
    }
}
