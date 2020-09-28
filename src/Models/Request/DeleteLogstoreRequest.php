<?php
namespace Le2le\AliyunLog\Models\Request;




/**
 * The request used to delete logstore from log service.
 *
 * @author log service dev
 */
class DeleteLogstoreRequest extends Request{

    private  $logstore;
    /**
     * DeleteLogstoreRequest constructor
     * 
     * @param string $project project name
     */
    public function __construct($project=null,$logstore = null) {
        parent::__construct($project);
        $this -> logstore = $logstore;
    }
    public function getLogstore()
    {
        return $this -> logstore;
    }
}
