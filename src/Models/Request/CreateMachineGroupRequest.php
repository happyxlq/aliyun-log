<?php
namespace Le2le\AliyunLog\Models\Request;




/**
 * 
 *
 * @author log service dev
 */
class CreateMachineGroupRequest extends Request {

    private $machineGroup;
    /**
     * CreateMachineGroupRequest Constructor
     *
     */
    public function __construct($machineGroup=null) {
        $this->machineGroup = $machineGroup;
    }
    public function getMachineGroup(){
        return $this->machineGroup;
    }
    public function setMachineGroup($machineGroup){ 
        $this->machineGroup = $machineGroup;
    }
 
}
