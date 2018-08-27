<?php


class appController extends Controller
{
	
	private $app;
	
	
    public function __construct() {

        Session::acceso();

        parent::__construct();
      $this->app=$this->loadModel('app');
		
    }

    public function index()
    {

 
			$this->_view->setJs(array('js'));
			$this->_view->setCss(array('css'));
        	$this->_view->titulo = 'menus';

        	$menu=$this->app->traer_menus();
        	$role=$this->app->traer_roles();
        	$matris = Array();
        	for ($i=0; $i < count($menu) ; $i++) { 

        		for ($y=0; $y < count($role); $y++) { 

        					$vn=$this->app->traer_permisos($menu[$i]['id_menu'],$role[$y]['id_role']);
        	        		if ($vn=='') {
        	        			$matris[$i][$y]['permiso']='0';
        	        		}else{
        	        		$matris[$i][$y]=$this->app->traer_permisos($menu[$i]['id_menu'],$role[$y]['id_role']);
	
        	        		}
        	        		
        	        		}
        		
        		

        	

        	}




             $this->_view->bloqueo=$this->app->bloqueo();
            $this->_view->bloqueo_datos=$this->app->bloqueo_datos();
        	$this->_view->cont=$this->app->all_cont();
            $this->_view->logs=$this->app->all_logs();
        	$this->_view->menus=$menu;
			$this->_view->rol=$role;
			$this->_view->matris=$matris;
			$this->_view->renderizar('index');		
	}


  
    function permisos_ch(){


        $this->app->permisos_ch($_GET['menu'],$_GET['rol'],$_GET['estado']);

    }


     public function guardar_usuario(){


        $this->app->guardar_usuario($_POST);


   }

    public function buscar_nosotros(){


    echo json_encode($this->app->buscar_nosotros());


   }


     public function guardar_nosotros(){


        $this->app->guardar_nosotros($_POST);


   }


    public function guardar_servicio(){


        $this->app->guardar_servicio($_POST);


   }





   public function buscar_informacion(){


    echo json_encode($this->app->buscar_informacion());


   }


    public function guardar_mision(){


        $this->app->guardar_mision($_POST);


   }


    public function guardar_vision(){


        $this->app->guardar_vision($_POST);


   }


    public function guardar_preview(){


        $this->app->guardar_preview($_POST);


   }


    public function guardar_titulo(){


        $this->app->guardar_titulo($_POST);


   }








    
    function updonw(){
     $objeto=$this->loadModel('app');
       
       if ($_POST['accion']==0) {
            $objeto->gf($_POST);
       }else{
            $objeto->gf();
       }
    }
}


?>