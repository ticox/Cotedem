<?php

class principalModel extends Model
{
    public function __construct() {
        parent::__construct();
    }
    


public function informacion(){

$sql="SELECT * FROM informacion";

 $datos=$this->_db->query($sql);
      
return $datos->fetch();

}

public function nosotros(){

 $sql="SELECT * FROM nosotros";

 $datos=$this->_db->query($sql);
      
return $datos->fetch();

}


public function servicios(){

 $sql="SELECT * FROM servicios";

 $datos=$this->_db->query($sql);
      
return $datos->fetchall();

}


}?>
