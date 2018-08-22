<?php

class principalModel extends Model
{
    public function __construct() {
        parent::__construct();
    }
    


public function numero_per(){

$sql="SELECT COUNT(*) as numero FROM `persona`";

 $datos=$this->_db->query($sql);
      
return $datos->fetch();




}

}?>
