<?php
    class Productos extends Controllers{

        public function __construct()
        {
            parent::__construct();
        }
        public function productos()
        {   
            $data['page_id'] = 20;
            $data['page_tag'] = "Productos";
            $data['page_title'] = "Productos en Venta";
            $data['page_name'] = "productos";
            $this->views->getView($this,"productos",$data);
        }
        
    }
?>